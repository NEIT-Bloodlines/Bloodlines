<?php

class SigninModel extends MasterModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines");
        return $this->viewModel;
    }
}

