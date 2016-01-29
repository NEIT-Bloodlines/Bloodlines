<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
 */

class AdminModel extends MasterModel
{
    //data passed to the Admin index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines|Admin");
        return $this->viewModel;
    }
}

