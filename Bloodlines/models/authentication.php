<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AuthenticationModel extends MasterModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines");
        return $this->viewModel;
    }
}