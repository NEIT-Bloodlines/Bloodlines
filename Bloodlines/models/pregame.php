<?php
/* 
 * Developed by: Natick Patel, 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class GameModel extends MasterModel
{
    //data passed to the Game index view
    public function index()
    {   
        $this->setPageTitle();
        $this->setCSSpath();
        $this->setJSpath();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="public/js/preGamePage.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/stylePregame.css" rel="stylesheet">');
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Pregame");
    }
}
