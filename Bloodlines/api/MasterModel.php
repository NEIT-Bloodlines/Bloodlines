<?php
/* 
 * Developed by: DavidLandi 1/25/16
 * Purpose: 
 * Refactored By: (Name Date Reason)
 */

class MasterModel {
    
    protected $viewModel;

    //basemodel
    public function __construct()
    {
        $this->viewModel = new ViewModel();
		$this->commonViewData();
    }

    
    protected function commonViewData() {
	
    //e.g. $this->viewModel->set("mainMenu",array("Home" => "/home", "Help" => "/help"));
    }
}
