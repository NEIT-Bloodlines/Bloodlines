<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of masterModel
 *
 * @author David landi
 */
class masterModel {
    public function set($name, $val){
        $this->$name = $val;
    }
    
    public function get($name){
        if(isset($this->{$name})){
            return $this->{$name};
        }
        else{
            return null;
        }
    }
}
?>