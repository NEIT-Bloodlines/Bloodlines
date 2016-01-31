<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class HomeModel extends MasterModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines");
        return $this->viewModel;
    }
}
