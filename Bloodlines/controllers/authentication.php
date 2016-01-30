<?php

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
