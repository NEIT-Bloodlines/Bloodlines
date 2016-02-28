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
        $this->setBodyTag();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="chatroomApp/chatroomController.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/stylePregame.css" rel="stylesheet">'.
                "<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>");
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Pregame");
    }
    
    private function setBodyTag(){
        $this->viewModel->set("bodytag","setInterval('chat.update()',1000)");
    }
}
