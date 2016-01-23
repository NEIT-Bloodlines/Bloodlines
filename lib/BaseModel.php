<?php
/**
 * Description of BaseModel
 *
 * @author Justin Barreira
 */
abstract class BaseModel {
    
    function __construct($paramArr = array()) {
        $this->map($paramArr);
    }
    
    /**
    * A public method to map all the variables to a value
    *
    * @param Array $paramArr
    *
    * @return Void
    */ 
    public function map($paramArr) {        
        if ( is_array($paramArr) && count($paramArr) ) {                   
            foreach ($paramArr as $key => $value) {
                $method = 'set'.ucfirst($key);
                if( method_exists($this, $method) ) {
                    $this->$method($value);
                }
            }
        }       
    }
}
