<?php
//load the required classes
require("api/MasterController.php");  
require("api/MasterModel.php");
require("api/View.php");
require("api/ViewModel.php");
require("api/Factory.php");

$ctrlFactory = new Factory(); //create the ctrlFactory object
$controller = $ctrlFactory->buildController(); //creates the requested controller object based on the 'controller' URL value
$controller->executeRequestedAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.
?>