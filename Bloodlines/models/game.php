<?php
/* 
 * @author: Naitik Patel 
 * Date: 1/28/16
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

