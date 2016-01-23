<?php

/**
 * Description of BloodlinesDB
 *
 * @author Justiin Barreira
 */
class BloodlinesDB {
    
    /**
     *Global protected var
     */
    protected $db = null;
   
    /**
     * Setter for the database
     */
    public function setDb(){
        try {
            $this->db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
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
     * Public function to close the database
     */
    public function closeDB(){
        $this->db = null;
    }
}
