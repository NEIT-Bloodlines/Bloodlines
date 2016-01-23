<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of masterController
 *
 * @author David landi
 */
class MasterController {
    protected $urlValue;
    protected $action;
    protected $model;
    protected $view;
    
    public function __construct($action, $urlValue){
        $this->action = $action;
        $this->urlValue = $urlValue;
        
        $this->view = new ViewFactory(get_class($this), $action);
    }
    
    public function exeAction(){
        return $this->action();
    }
}
