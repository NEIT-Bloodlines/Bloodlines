<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class StatisticsModel extends MasterModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->setPageTitle();
        $this->setCSSpath();
        $this->setJSpath();
        $this->setBodyTag();
        $this->setStats();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="public/js/statisticsPage.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/styleStatistics.css" rel="stylesheet">');
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Ranks");
    }
    
    private function setBodyTag(){
        $this->viewModel->set("bodytag","");
    }
    
    private function setStats(){
        $this->viewModel->set("stats", $this->getStats());
    }
    
    /**
     *  Method to return members stats by most wins in a descending order.
     *  
     * @return array
     */
    private function getStats(){
        
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('SELECT member.username, COUNT(CASE WHEN `gameWinner` = true THEN 1 END) as wins,'
                    . ' COUNT(CASE WHEN `gameWinner` = false THEN 1 END) as losses FROM `gameresult`'
                    . ' JOIN member ON gameresult.memberID = member.memberID'
                    . ' GROUP BY gameresult.memberID ORDER BY `wins` DESC');
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                while ($result = $dbs->fetch(PDO::FETCH_ASSOC)){
                    $array[] = $result;
                }
                return $array;
            }            
        }        
        return null;
    }
}


