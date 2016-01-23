<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of viewFactory
 *
 * @author David landi
 */
class ViewFactory {
    protected $viewFile;
    
    public function __construct($ctrlClass, $action){
        $ctrlName = str_replace("Controller", "", $ctrlClass);
        $this->viewFile = "views/" . $ctrlName . "/" .$action . ".php";
    }
    
    private function viewFileExists(){
        if(file_exists($this->viewFile)){
            return true;
        }
        return false;
    }
    
    private function templateFileExists($templateFile){
        if(file_exists($templateFile)){
            require($templateFile);
            return true;
        }
        require("views/error/badtemplate.php");
        return false;
    }
    
    private function templateNotNull($template){
        if($template != null){
            return true;
        }
        //if arg is null there is no template being used
        require($this->viewFile);
        return false;
    }
    
    public function buildView($viewModel, $template="mastertemplate"){
        $templateFile = "views/" .$template.".php";
        
        if($this->viewFileExists()){
            if($this->templateNotNull($template)){
                $this->templateFileExists($templateFile);
            }
        }
    }
}
