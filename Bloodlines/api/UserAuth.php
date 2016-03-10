<?php
/**
 * Developer: Justin Barreira
 * Created: 2/23/16
 * Purpose: Class for user login/signup
 */
class UserAuth extends Utils{
    
    private $username;
    private $password;
    private $email;
    
    function __construct() {
        $this->setDB();
        $this->setUsername(filter_input(INPUT_POST, 'username'));
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST, 'email'));
    }
    
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    /** 
     * @author Justin Barreira
     * 
     * @param UserAuth $member
     *  
     * @return boolean
     * 
     * @example sets $_SESSION['MemberID'] = memberID, $_SESSION['Username'] = username
     */
    public function Login(UserAuth $member){
        $allowAccess = false;
        
        if(null !== $this->getDB() && $member instanceof UserAuth){
            $dbs = $this->getDB()->prepare('select * from member where username = :username AND password = :password limit 1');
            $dbs->bindparam(':username', $member->getUsername(), PDO::PARAM_STR);
            $dbs->bindparam(':password', $member->getPassword(), PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = $dbs->fetch(PDO::FETCH_ASSOC);
                $_SESSION['MemberID'] = $result['memberID'];
                $_SESSION['Username'] = $result['username'];
                $allowAccess = true;
            }            
        }        
        return $allowAccess;
    }
    
    public function Signup(UserAuth $member){
        $allowAccess = false;
        
        if(null !== $this->getDB() && $member instanceof UserAuth){
            $dbs = $this->getDB()->prepare('insert into member set username = :username, password = :password, email = :email');
            $dbs->bindparam(':username', $member->getUsername(), PDO::PARAM_STR);
            $dbs->bindparam(':password', $member->getPassword(), PDO::PARAM_STR);
            $dbs->bindparam(':email', $member->getEmail(), PDO::PARAM_STR);
            
            if($dbs->execute() && $dbs->rowCount() > 0){
                $result = $dbs->fetch(PDO::FETCH_ASSOC);
                $_SESSION['MemberID'] = $result['user_id'];
                $allowAccess = true;
            }            
        }
        
        return $allowAccess;
    }    
}
