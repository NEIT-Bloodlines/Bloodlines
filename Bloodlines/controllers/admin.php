<?php
/* 
 * @author: Naitik Patel 
 * Purpose: Acts as director to build authentication pages
 * Date: 1/28/16
 */

class AdminController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/admin.php");
        $this->model = new AdminModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}