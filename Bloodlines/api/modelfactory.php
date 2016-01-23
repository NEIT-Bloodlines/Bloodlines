<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelFactory
 *
 * @author David landi
 */
class ModelFactory {
    public function set($name, $value){
        $this->name = $val;
    }
    
    public function get($name) {
        if (isset($this->{$name})) {
            return $this->{$name};
        } else {
            return null;
        }
    }   
}
