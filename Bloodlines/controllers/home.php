<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author David landi
 */
class HomeController extends MasterController {
    public function __construct($action, $urlValue){
        parent::__construct($action, $urlValue);
        
        require("models/home.php");
        $this->model = new HomeModel();
    }
    
    protected function index(){
        $this->view->buildView($this->model->index());
    }
}
