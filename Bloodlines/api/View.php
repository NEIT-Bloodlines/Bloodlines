<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class View {    
    
    protected $viewFile;
    
    //establish view location on object creation
    public function __construct($ctrlClass, $action) {
        $ctrlName = str_replace("Controller", "", $ctrlClass);
        $this->viewFile = "views/" . $ctrlName . "/" . $action . ".php";
    }
               
    //output the view
    public function output($viewModel, $template = "masterpage") {
        
        $templateFile = "views/".$template.".php";
        
        if (file_exists($this->viewFile)) {
            if ($template) {
                //include the full template
                if (file_exists($templateFile)) {
                    require($templateFile);
                } else {
                    require("views/home/index.php");
                }
            } else {
                //not a temp just display master
                require($this->viewFile);
            }
        } else {
            require("views/home/index.php");
        }
        
    }
}
