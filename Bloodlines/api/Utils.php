<?php
/**
 * Developer: Justin Barreira
 * Created: 3/1/16
 * Purpose: Utility class for basic functions needed
 */
class Utils {
    
    const DB_DNS = "mysql:host=localhost;port=3306;dbname=bloodlines",
          DB_USER = "root",
          DB_PASSWORD = "";
    
    protected $db = null;
    
    /**
     * Setter for the database
     */
    public function setDB(){
        try {
            $this->db = new PDO(Utils::DB_DNS, Utils::DB_USER, Utils::DB_PASSWORD);
        } catch (Exception $ex) {
            $this->closeDB();
        }
    }
    
    /**
     * Getter for the database
     */
    public function getDB(){
        return $this->db;
    }
    
    /**
     * Closes the database
     */
    public function closeDB(){
        $this->db = null;
    }
    
    /**
     * Checks if a POST request has been made 
     */
    public static function isPostRequest(){
        return(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST');
    }
    
    /**
     * Checks if a GET request has been made 
     */
    public static function isGetRequest(){
        return(filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET');
    }
    
    /**
     * Checks if a user is logged in and returns them to the home page if they aren't.
     * 
     * @return boolean
     */
    public static function hasAccess(){
        if($_SESSION['MemberID'] <= 0){
            session_destroy();
            header('Location: /');
            exit;
        }
    }
    
    public function Logout(){
        session_destroy();
        header('Location: /');
        exit;
    }
}
