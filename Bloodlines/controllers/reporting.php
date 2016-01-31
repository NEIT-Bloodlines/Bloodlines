<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: Acts as a director in building the reporting page
 * Refactored By: (Name Date Reason)
 */

class ReportingController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/reporting.php");
        $this->model = new ReportingModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}