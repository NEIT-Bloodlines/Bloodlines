<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

abstract class MasterController {
    
    protected $urlRequestValues;
    protected $action;
    protected $model;
    protected $view;
    
    public function __construct($action, $urlRequestValues) {
        $this->action = $action;
        $this->urlRequestValues = $urlRequestValues;
                
        //establish the view object
        $this->view = new View(get_class($this), $action);
    }
        
    //executes the requested method
    public function executeRequestedAction() {
        return $this->{$this->action}();
    }
}
