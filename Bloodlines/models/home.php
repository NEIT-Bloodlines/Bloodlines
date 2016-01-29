<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
 */

class HomeModel extends MasterModel
{
    //data passed to the Home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines");
        return $this->viewModel;
    }
}
