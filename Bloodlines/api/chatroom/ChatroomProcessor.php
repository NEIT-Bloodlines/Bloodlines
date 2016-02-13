<?php
/* 
 * Developer: David Landi
 * Created: 2/13/16
 * Purpose: Collection of methods for chatroom functionality.
 * Notes:
 *      - api/chatroom/chatroomHandler is a need script inorder for ajax to 
 *        to request a method to execute from the Chatroom Processor class. It 
 *        will create the new Chatroom Processor object and then call 
 *        executeRequestedMethod().
 *  
 * Modifed by: (Name, Reason, Date)
 *  */

class ChatroomProcessor {
    private $reqMethod;
    private $chatroomID;
    private $chatArchiveFileName;
    private $fltUsrMessage;
    private $fltUsrName;
    private $chatroomLog = array();
    
    public function __construct($reqMethod, $chatroomID){
        $this->reqMethod = $reqMethod;
        $this->chatroomID = $chatroomID;
        $this->chatArchiveFileName = $this->chatroomID . '.txt';
    }
    
    public function executeRequestedMethod(){
        $this->methodSelector();
    }
    
    private function getChatroomState(){
        $linesInFile = file($this->chatArchiveFileName);
        $this->chatroomLog['state'] = count($linesInFile);
    }
    
    private function updateChatroom(){
        $chatroomState = $_POST['state'];
        $linesInFile = file($this->chatArchiveFileName);
        $lineCount = count($linesInFile);
        
        if($chatroomState == $lineCount){
            $this->chatroomLog['state'] = $chatroomState;
            $this->chatroomLog['text'] = false;
        }
        else{
            $text = array();
            $this->chatroomLog['state'] = $chatroomState + count($linesInFile) - $chatroomState;
            
            foreach($linesInFile as $ln => $line){
                if($ln >= $chatroomState){
                    $text[] = $line = str_replace("\n", "", $line);
                }
            }
            $this->chatroomLog['text'] = $text;
        }
    }
    
    private function sendChatroomMessage(){
        $uname = $_POST['username'];
        $umsg = $_POST['usermessage'];
        $fltData = new ChatRoomFilter($uname, $umsg);
        $regForUrl = $fltData->getUrlRegxFilter();
        $this->fltUsrName = $fltData->getFilteredUsrName();
        $this->fltUsrMessage = $fltData->getFilteredUsrMsg();
        
        if($this->fltUsrMessage != "\n"){
            if(preg_match($regForUrl, $this->fltUsrMessage, $url)){
                $this->fltUsrMessage = preg_replace($regForUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $this->fltUsrMessage);
            }
            fwrite(fopen($this->chatArchiveFileName, 'a'), "<span>" . $this->fltUsrName . $this->fltUsrMessage = str_replace("\n", " ", $this->fltUsrMessage) . "\n");
        }
    }
    
    private function methodSelector(){
        switch($this->reqMethod){
            case('getChatroomState'):
                $this->getChatroomState();
                break;
            case('updateChatroom'):
                $this->updateChatroom();
                break;
            case('sendChatroomMessage'):
                $this->sendChatroomMessage();
                break;
        }
        echo json_encode($this->chatroomLog);
    }
}

class ChatRoomFilter{
    private $usrName;
    private $usrMsg;
    private $filteredUsrName;
    private $filteredUsrMsg;
    
    public function __construct($usrName, $usrMsg){
        $this->usrName = $usrName;
        $this->usrMsg = $usrMsg;
        $this->runFilters();
    }
    
    public function getFilteredUsrName(){
        return $this->filteredUsrName;
    }
    
    public function getFilteredUsrMsg(){
        return $this->filteredUsrName;
    }
    
    private function runFilters(){
        $this->filterHtmlTags('username');
        $this->filterHtmlTags('usermessage');
        $this->filterProfanity($this->getFilteredUsrMsg());
    }
    
    private function setFilteredUsrName($fltUsrName){
        $this->filteredUsrName = $fltUsrName;
    }
    
    private function setFilteredUsrMsg($fltUsrMsg){
        $this->filteredUsrMsg = $fltUsrMsg;
    }
    
    private function getUsrName(){
        return $this->usrName;
    }
    
    private function getUsrMsg(){
        return $this->usrMsg;
    }
    
    public function getUrlRegxFilter(){
        return "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
    }
    
    private function filterHtmlTags($dataType){
        switch($dataType){
            case('username'):
                $this->setFilteredUsrName(htmlentities(strip_tags($this->getUsrName())));
                break;
            case('usermessage'):
                $this->setFilteredUsrMsg(htmlentities(strip_tags($this->getUsrMsg())));
                break;
        }
    }
    
    private function filterProfanity($usrMessage){
        $profanities = array('fuck', 'shit', 'ass', 'asshole', 'bitch', 'pussy', 'cunt', 'fuckyou', 'whore', 'dick', 'nigger', 'fucking');
        $msg = strtolower($usrMessage);
        $fltMsg = '';
        
        foreach($profanities as $badword){
            $foundProfanity = strpos($badword, $msg);
            if($foundProfanity){
                $fltMsg = str_replace($badword, "BLEEP ", $msg);
            }
        }
        $this->setFilteredUsrMsg($fltMsg);
    }
}
