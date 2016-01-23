<?php

/* Developer: David Landi
 * Purpose: Class that maps url requests and builds a controller object
 * Date: 1/23/16
 */
class ControllerFactory {
    private $ctrlName;
    private $ctrlClass;
    private $action;
    private $urlValue;
    
    public function __construct(){
        $this->urlValue = $_GET;
        $this->setControllerAttr();
        $this->processUrl();
    }
    
    private function isCtrlHome(){
        if($this->urlValue['controller'] == ""){
            return true;
        }
        return false;
    }
    
    private function setControllerAttr(){
        if($this->isCtrlHome()){
            $this->ctrlName = "home";
            $this->ctrlClass = "homeController";
        }
        else{$this->isNotCtrlHome();}
    }
    
    private function isNotCtrlHome(){
        $this->ctrlName = strtolower($this->urlValues['controller']);
        $this->ctrlClass = ucfirst(strtolower($this->urlValue['controller']))."Controller";
    }
    
    private function processUrl(){
        if($this->urlValue['action'] == ""){
            $this->action = "index";
        }
        else{$this->action = $this->urlValues['action'];}
    }
    
    private function ctrlFileExists(){
        if(file_exists("controllers/" .$this->ctrlName . ".php")){
            return true;
        }
        require("controllers/error.php");
        return new ErrorController("badurl",$this->urlValue);
    }
    
    private function ctrlClassExists(){
        if(class_exists($this->ctrlClass)){
            return true;
        }
        require("controllers/error.php");
        return new ErrorController("badurl",$this->urlValue);
    }
    
    private function inheritsFromMaster($parClass){
        if(in_array("MasterController", $parClass)){
            if(method_exists($this->ctrlClass, $this->action)){
                return true;
            }
        }
        return false;
    }
    
    public function buildControler(){
        $parents;
        if($this->ctrlFileExists()){
            require("controllers/" . $this->ctrlName . ".php");
        }
        
        if($this->ctrlClassExists()){
            $parents = class_parents($this->ctrlClass);
            if($this->inheritsFromMaster($parents)){
                return new $this->ctrlClass($this->action, $this->urlValue);
            }
        }
    }
}
?>
