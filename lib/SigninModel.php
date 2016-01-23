<?php
/**
 * Description of SigninModel
 *
 * @author Justin Barreira
 */
class SigninModel extends BaseModel {
        
    private $memberId;
    private $email;
    private $password;
    
    function getMemberId() {
        return $this->memberId;
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function getPassword() {
        return $this->password;
    }

    function setMemberId($memberId) {
        $this->memberId = $memberId;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }
    
    function setPassword($password) {
        $this->password = $password;
    }    
}
