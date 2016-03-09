<?php
/*
 * Developer: David Landi, 3/8/16
 * Notes: 
 *      When this index gets executed a while loop will be executed
 *      for the total amount of areas on a given map.  Currenty the 
 *      default map has 41 areas which means there are 41 html modals
 *      that need to be created. Instead of typing each out (insanity) 
 *      we use the HtmlCreator class in our api which provides functionality
 *      that will write html to a given file path. By using <<<EOD (multiline string)
 *      we are able to maintain the proper html format.  String munipulation is 
 *      also used inorder to dynamically populate the modal id for each modal
 *      determined by the count.
 */

class CountyModalCreator{
    private $html = '';
    private $mdlID;
    private $btnClpIntelID;
    private $btnClpUnitID;
    private $btnClpWarID;
    private $countyIntel;
    private $ddmUnitDestination;
    private $ddmTotalUnitsTransfering;
    private $ddmAvailableUnits;
    private $btnTransfer;
    private $btnAddUnits;
    private $ddmDestinationToAttack;
    private $btnDeclareWar;
    private $title;
    private $count = 0;
    
    public function __constructor(){
        
    }
    
    public function generateModalHtml($totalneeded){
        
        while($this->count < $totalneeded){
            $this->count++;
            $this->title = 'County ' . strval($this->count);
            $this->btnAddUnits = 'btnAddUnits' . strval($this->count);
            $this->btnClpIntelID = 'btnClpIntelID' . strval($this->count);
            $this->btnClpUnitID = 'btnClpUnitID' . strval($this->count);
            $this->btnClpWarID = 'btnClpWarID' . strval($this->count);
            $this->btnDeclareWar = 'btnDeclareWar' . strval($this->count);
            $this->btnTransfer = 'btnTransfer' . strval($this->count);
            $this->countyIntel = 'ddmUnitDestination' . strval($this->count);
            $this->ddmAvailableUnits = 'ddmAvailableUnits' . strval($this->count);
            $this->ddmDestinationToAttack = 'ddmDestinationToAttack' . strval($this->count);
            $this->ddmTotalUnitsTransfering = 'ddmTotalUnitsTransfering' . strval($this->count);
            $this->mdlID = 'mdlCounty' . strval($this->count);
            $this->html .= $this->modalHtml();
        }
        return $this->html;
    }
    
    public function writeHtmlToDest(){}
    
    private function modalHtml(){
        $prototype = <<<EOD
        <div id="$this->mdlID" class="modal fade dflt_modal_style">
        <div class="modal-dialog modal-lg">
        <div class="modal-content text-justify">
        <div class="modal-header text-center">
        <button type="button" class="close mdl_btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>
        </button>
        <h4><strong>$this->title</strong></h4>
        </div><!--/modal-header-->
                
        <div class="modal-body">
                <button type="button" id="$this->btnAddUnits" class="btn btn-default">Add</button>
        
        </div>
        </div>
        </div>
        </div>
EOD;
        return $prototype;
    }
}

