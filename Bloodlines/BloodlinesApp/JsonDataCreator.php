<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class JsonDataCreator{
    public function __constructor(){
    }
    
    abstract protected function generateJsonData();
    abstract protected function jsonPrototype();
}

class CountyData extends JsonDataCreator{
    private $countyID;
    private $modalID;
//    private $btnClpIntelID;
//    private $btnClpUnitID;
//    private $btnClpWarID;
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
    private $jsd = '';

    public function __constructor(){
 
    }
    
    public function getCountyData(){
        return 'var countyElements = {"county" : [' . $this->generateJsonData() . ']};';
    }
    
    protected function generateJsonData() {
        
       while($this->count < 40){
            $this->count++;
            $this->countyID = 'a, .county' . strval($this->count);
            $this->title = 'County ' . strval($this->count);
            $this->btnAddUnits = '#btnAddUnits' . strval($this->count);
            $this->btnClpIntelID = '#btnClpIntelID' . strval($this->count);
            $this->btnClpUnitID = '#btnClpUnitID' . strval($this->count);
            $this->btnClpWarID = '#btnClpWarID' . strval($this->count);
            $this->countyIntel = '#countyIntel' . strval($this->count);
            $this->btnDeclareWar = '#btnDeclareWar' . strval($this->count);
            $this->btnTransfer = '#btnTransfer' . strval($this->count);
            $this->ddmUnitDestination = '#ddmUnitDestination' . strval($this->count);
            $this->ddmAvailableUnits = '#ddmAvailableUnits' . strval($this->count);
            $this->ddmDestinationToAttack = '#ddmDestinationToAttack' . strval($this->count);
            $this->ddmTotalUnitsTransfering = '#ddmTotalUnitsTransfering' . strval($this->count);
            $this->modalID = '#mdlCounty' . strval($this->count);
            $this->jsd .= $this->jsonPrototype();
       }
       $this->jsd .= '{' . $this->addKey('btnID') . $this->addValue('a, .county41') .
               $this->addKey('title') . '"County 41",'.
                $this->addKey('modalID') . $this->addValue('#mdlCounty41') . 
                $this->addKey('btnAddUnitsID') . $this->addValue('#btnAddUnits41').
                $this->addKey('btnClpIntelID') . $this->addValue('#countyIntel41').
                $this->addKey('btnClpUnitID') . $this->addValue('#btnClpUnitID41') .
                $this->addKey('btnClpWarID') . $this->addValue('#btnClpWarID41') .
                $this->addKey('countyIntelID') . $this->addValue('#countyIntelID41').
                $this->addKey('ddmUnitDestID') . $this->addValue('#ddmUnitDestination41').
                $this->addKey('ddmTotalUnitsTranID') . $this->addValue('#ddmTotalUnitsTransfering41').
                $this->addKey('ddmAvailableUnitsID') . $this->addValue('#ddmAvailableUnits41').
                $this->addKey('btnTransferID') . $this->addValue('#btnTransfer41').
                $this->addKey('ddmDestinationToAttackID') . $this->addValue('#ddmDestinationToAttack41').
                $this->addKey('btnDeclareWarID') . '$("#btnDeclareWar41")}';
       return $this->jsd;
    }
    
    protected function jsonPrototype(){
        $prototype = '{' . $this->addKey('btnID') . $this->addValue($this->countyID) .
                $this->addKey('modalID') . $this->addValue($this->modalID) . 
                $this->addKey('btnClpIntelID') . $this->addValue($this->btnClpIntelID).
                $this->addKey('btnClpUnitID') . $this->addValue($this->btnClpUnitID) .
                $this->addKey('btnClpWarID') . $this->addValue($this->btnClpWarID) .
                $this->addKey('countyIntelID') . $this->addValue($this->countyIntel).
                $this->addKey('ddmUnitDestID') . $this->addValue($this->ddmUnitDestination).
                $this->addKey('ddmTotalUnitsTranID') . $this->addValue($this->ddmTotalUnitsTransfering).
                $this->addKey('ddmAvailableUnitsID') . $this->addValue($this->ddmAvailableUnits).
                $this->addKey('btnTransferID') . $this->addValue($this->btnTransfer).
                $this->addKey('btnAddUnitsID') . $this->addValue($this->btnAddUnits).
                $this->addKey('ddmDestinationToAttackID') . $this->addValue($this->ddmDestinationToAttack).
                $this->addKey('btnDeclareWarID') . $this->addValue($this->btnDeclareWar).
                $this->addKey('titleID') . $this->addValue($this->title) . '},';
        return $prototype;
    }
    
    private function addKey($k){
        $key = '"' . $k . '" : ';
        return $key;
    }
    
    private function addValue($v){
        $value = '$("' . $v . '"),';
        
        return $value;
    }
    
}
