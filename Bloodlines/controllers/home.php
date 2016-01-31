<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: Acts as a director to build the home page
 * Refactored By: (Name Date Reason)
 */

class HomeController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/home.php");
        $this->model = new HomeModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}

