<?php

class SigninController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/signin.php");
        $this->model = new SigninModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}