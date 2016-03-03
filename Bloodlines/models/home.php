<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class HomeModel extends MasterModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->setPageTitle();
        $this->setCSSpath();
        $this->setJSpath();
        $this->setBodyTag();
        $this->setTestString();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="public/js/detect.min.js"></script><script src="public/js/homePage.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/styleHome.css" rel="stylesheet">');
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Home");
    }
    
    private function setBodyTag(){
        $this->viewModel->set("bodytag","");
    }
}
