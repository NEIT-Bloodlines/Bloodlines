<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
 */

class SigninModel extends MasterModel
{
    //data passed to the Signin index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines|Signin");
        return $this->viewModel;
    }
}

