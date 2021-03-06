<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */
require_once 'api/Logger.php';
class Factory {
    
    private $ctrlName;
    private $ctrlClass;
    private $action;
    private $urlRequestValues;
    
    //When obj is created store the url data
    public function __construct() {
        Logger::writeToLog('factory constructor called', __LINE__, __FILE__);
        $this->cacheUrlRequest();
        $this->processController();
        $this->processAction();
    }
	
	//determines which method the controller will call
	private function processAction(){
            Logger::writeToLog('process action for '. $this->ctrlName, __LINE__, __FILE__);
		if ($this->urlRequestValues['action'] == "") {
            $this->action = "index";
        }
		else{$this->action = $this->urlRequestValues['action'];}
	}
	
	//sets the controllers attr
	private function cacheUrlRequest(){
		$this->urlRequestValues = $_GET;
	}
	
	//determines which controller to create
	private function processController(){
            if($this->urlRequestValues['controller'] == ""){
                $this->ctrlName = "home";
                $this->ctrlClass = "HomeController";
            }
            else{
                $this->ctrlName = strtolower($this->urlRequestValues['controller']);
                $this->ctrlClass = ucfirst(strtolower($this->urlRequestValues['controller'])) . "Controller";			
            }
            Logger::writeToLog('Determined control: ' . $this->ctrlName . $this->ctrlClass, __LINE__, __FILE__);
	}
                  
    //factory method to build the controller spec
    public function buildController() {
        if ($this->controllerSpecMeetsRequirements()){
            return new $this->ctrlClass($this->action,$this->urlRequestValues);
        }
        require("controllers/" . $this->ctrlName . ".php");
        Logger::writeToLog('Building ' . $this->ctrlName, __LINE__, __FILE__);
        header("location: /home");
    }
	
    private function controllerSpecMeetsRequirements(){
        $isValid = false;
        $validatorMethods = array('fileName' => 'ctrlFileExistsInDir',
                                  'className' => 'ctrlClassExists',
                                  'inherits' => 'ctrlClassInheritsMaster',
                                  'method' => 'ctrlRequestedMethodExists');

        foreach($validatorMethods as $k => $v){
            $isValid = $this->$validatorMethods[$k] ();
        }
        return $isValid;
    }

    public function ctrlClassExists(){
        if (class_exists($this->ctrlClass)){return true;}
        return false;
    }

    public function ctrlFileExistsInDir(){
        if(file_exists("controllers/" . $this->ctrlName . ".php")){
            require("controllers/" . $this->ctrlName . ".php");
            return true;}
        return false;
    }
    public function ctrlClassInheritsMaster(){
        if(in_array("MasterController",class_parents($this->ctrlClass))){
            return true;
        }
        return false;
    }
    public function ctrlRequestedMethodExists(){
        if (method_exists($this->ctrlClass,$this->action)){return true;}
        return false;
    }
}
