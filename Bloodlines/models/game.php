<?php
/* 
 * Developed by: Natick Patel, 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class GameModel extends MasterModel
{
    //data passed to the Game index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Bloodlines|Game");
        return $this->viewModel;
    }
}

