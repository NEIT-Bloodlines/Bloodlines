<?php
//ini_set('display_errors', 1);
//load the required classes
include 'api/Dependency.php';

$ctrlFactory = new Factory(); //create the ctrlFactory object
$controller = $ctrlFactory->buildController(); //creates the requested controller object based on the 'controller' URL value
$controller->executeRequestedAction(); //execute the requested controller's requested method based on the 'action' URL value. Controller methods output a View.