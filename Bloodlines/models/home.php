<?php

class HomeModel extends MasterModel{
    public function index(){
        $this->viewModel->set("pageTitle", "Bloodlines");
        return $this->viewModel;
    }
}

