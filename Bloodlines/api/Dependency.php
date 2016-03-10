<?php
/**
 * Developer: Justin Barreira
 * Created: 3/1/16
 * Purpose: Autoload class functionality. Starts Session.
 */
function load_lib($class){
    include 'api/'.$class.'.php';
};
spl_autoload_register('load_lib');

session_start();