<?php
/**
 * Description of Member
 *
 * @author Justin Barreira
 */
class Member extends BloodlinesDB{
    
    private $username;
    private $email;
    private $password;
    
    function __construct() {
        $this->setDb();
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST, 'email'));
        $this->setUsername(filter_input(INPUT_POST, 'username'));
    }
    
    function getUsername() {
        return $this->username;
    }
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    public function Login(Member $memberModel){
        $allowAccess = false;
        
        if( null !== $this->getDB() && $memberModel instanceof Member){
            $dbs = $this->getDB()->prepare('select * from member where username = :username AND password = :password limit 1');
            $dbs->bindParam(':username', $memberModel->getUsername(), PDO::PARAM_STR);
            $dbs->bindParam(':password', $memberModel->getPassword(), PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                    
                    $result = $dbs->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['userID'] = $result['user_id'];
                    $allowAccess = true;
                }
        }
        
        return $allowAccess;
    }
    
    public function Signup(Member $member){
        $allowAccess = false;
        
        if(null !== $this->getDB() && $member instanceof Member) {
            $dbs = $this->getDB()->prepare('insert into member set username = :username, email = :email, password = :password');
            $dbs->bindParam(':username', $member->getUsername(), PDO::PARAM_STR);
            $dbs->bindParam(':email', $member->getEmail(), PDO::PARAM_STR);
            $dbs->bindParam(':password', $member->getPassword(), PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                    
                    $result = $dbs->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['userID'] = $result['user_id'];
                    $allowAccess = true;
                }
        }
        
        return $allowAccess;
    }
}
