<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
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

