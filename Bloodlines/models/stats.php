<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
 */

class StatsModel extends MasterModel
{
    //data passed to the Stats index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines|Stats");
        return $this->viewModel;
    }
}

