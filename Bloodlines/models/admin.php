<?php
/* 
 * Developed by: Natic Patel 1/28/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
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

