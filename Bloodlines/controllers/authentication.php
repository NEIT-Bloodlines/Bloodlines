<?php
/* 
 * Developed by: David Landi 1/28/16
 * Purpose: Acts as director to build authentication pages
 * Refactored By: (Name Date Reason)
 */

class AuthenticationController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/authentication.php");
        $this->model = new AuthenticationModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}
