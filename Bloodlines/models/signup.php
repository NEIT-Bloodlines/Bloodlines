<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
 */

class SignupModel extends MasterModel
{
    //data passed to the Signup index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines|Signup");
        return $this->viewModel;
    }
}

