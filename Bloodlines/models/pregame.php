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
        $this->setPageTitle();
        $this->setCSSpath();
        $this->setJSpath();
        $this->setBodyTag();
        $this->setLoggedInMembers();
        $this->setTopRankedMember();
        $this->setJoinableGames();
        $this->setGamesInProgress();
        $this->setLoggedInMembersUsername();
        $this->setJoinableGamesName();
        return $this->viewModel;
    }
    
    private function setJSpath(){
        $this->viewModel->set("script",
                '<script src="chatroomApp/chatroomController.js"></script>');
    }
    
    private function setCSSpath(){
        $this->viewModel->set('stylesheet', 
                '<link href="public/css/stylePregame.css" rel="stylesheet">'.
                "<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>");
    }
    
    private function setPageTitle(){
        $this->viewModel->set("pageTitle","Bloodlines|Pregame");
    }
    
    private function setBodyTag(){
        $this->viewModel->set("bodytag","setInterval('chat.update()',1000)");
    }
    
    private function setLoggedInMembers() {
        $this->viewModel->set("loggedInMembers", $this->getLoggedInMembers());
    }
    
    private function setTopRankedMember() {
        $this->viewModel->set("topRankedMember", $this->getTopRankedMember());
    }
    
    private function setJoinableGames() {
        $this->viewModel->set("joinableGames", $this->getJoinableGames());
    }
    
    private function setGamesInProgress() {
        $this->viewModel->set("gamesInProgress", $this->getGamesInProgress());
    }
    
    private function setLoggedInMembersUsername() {
        $this->viewModel->set("loggedInMembersUsernames", $this->getLoggedInMembersUsername());
    }
    
    private function setJoinableGamesName() {
        $this->viewModel->set("joinableGamesName", $this->getJoinableGamesName());
    }
    
    // Method to return the total number of members who are logged in.
    private function getLoggedInMembers() {
        if (null !== $this->getDB()) {
            $dbs = $this->getDB()->prepare('SELECT count(*) FROM member where isLoggedIn = 1');
            if ($dbs->execute() && $dbs->rowCount() > 0) {
                $result = $dbs->fetch(PDO::FETCH_COLUMN);
            }
        }
        return $result;
    }
    
    // Method to return the top ranked member username.
    private function  getTopRankedMember(){
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('SELECT username, COUNT(*) as wins FROM member'
                                        . ' join gameresult on member.memberID = gameresult.memberID'
                                        . ' where gameWinner = 1 group by username order by wins desc limit 1');
            if($dbs->execute() && $dbs->rowCount() > 0) {
                $result = $dbs->fetch(PDO::FETCH_COLUMN);
            }
        }
        return $result;
    }
    
    // Method to return the total number of joinable games
    private function getJoinableGames(){
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('SELECT count(*) FROM game'
                                           .' where gameStarted is null'
                                           .' and gameEnded is null');
            if($dbs->execute() && $dbs->rowCount() > 0) {
                $result = $dbs->fetch(PDO::FETCH_COLUMN);
            }
        }
        return $result;
    }
    
    // Method to return the total number of games in progress
    private function getGamesInProgress(){
        if(null !== $this->getDB()){
            $dbs = $this->getDB()->prepare('SELECT count(*) FROM game'
                                           .' where gameStarted is not null'
                                           .' and gameEnded is null');
            if($dbs->execute() && $dbs->rowCount() > 0) {
                $result = $dbs->fetch(PDO::FETCH_COLUMN);
            }
        }
        return $result;
    }
    
     // Method to returns all the usernames for logged in members.
    private function getLoggedInMembersUsername() {
        if (null !== $this->getDB()) {
            $dbs = $this->getDB()->prepare('SELECT username FROM member'
                                           . ' where isLoggedIn = true');
            if ($dbs->execute() && $dbs->rowCount() > 0) {
                while ($result = $dbs->fetch(PDO::FETCH_ASSOC)){
                    $array[] = $result;
                }
                return $array;
            }
        }
        return null;
    }
    
     // Method to returns all the gameTitle that are available to join.
    private function getJoinableGamesName() {
        if (null !== $this->getDB()) {
            $dbs = $this->getDB()->prepare('SELECT gameTitle FROM game'
                                           .' where gameStarted is null'
                                           .' and gameEnded is null');
            if($dbs->execute() && $dbs->rowCount() > 0) {
                while($result = $dbs->fetch(PDO::FETCH_ASSOC)){
                    $array[] =$result;
                }
                return $array;
            }
        }
        return null;
    }
}
