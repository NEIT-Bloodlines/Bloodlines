<?php
/* 
 * Developed by: Natik Patel 1/25/16
 * Purpose: Acts as a director to build game page
 * Refactored By: (Name Date Reason)
 */

class GameController extends MasterController
{
    //add to the parent constructor
    public function __construct($action, $urlRoutePath) {
        parent::__construct($action, $urlRoutePath);
        
        //create the model object
        require("models/game.php");
        $this->model = new GameModel();
    }
    
    //default method
    protected function index()
    {
        $this->view->output($this->model->index());
    }
}

