<?php
/* 
 * Developed by: Natic Patel 1/28/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class AdminModel extends MasterModel
{
    //data passed to the Admin index view
    public function index()
    {   
        $this->setPageTitle();
        $this->setCSSpath();
        $this->setJSpath();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="public/js/adminPage.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/styleAdmin.css" rel="stylesheet">');
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Admin");
    }
}

