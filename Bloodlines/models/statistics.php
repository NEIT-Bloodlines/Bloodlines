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
}


