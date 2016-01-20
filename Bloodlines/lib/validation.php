<?php
/**
 * @author Naitik Patel
 */
class validation 
{
    public static function loginIsValid($email, $password)
    {
        if(!Validator::emailIsValid($email) || !Validator::passwordIsValid($password))
        {
            return false;
        }
        
        $password = sha1($password);
        $dbCls = new DB();
        $db = $dbCls->getDB();
        
        if(NULL != $db)
        {
          $stmt = $db->prepare('select * from member where email = :emailValue and password = :passwordValue limit 1');
          $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
          $stmt->bindParam(':passwordValue', $password, PDO::PARAM_STR);
          $stmt->execute();
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          
          if ( is_array($result) &&  count($result) ) 
          {
              return true;
          }
        }
        else
        {
            return false;
        }
    }
    
    
    public static function loginIsValidPost()
    {
        if( array_key_exists("email", $_POST) || array_key_exists("password", $_POST) )
        {
            return false;
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        return Validator::loginIsValid($email, $password);
    }
    
    public static function emailIsValid($str)
    {
        // email should be in proper formate. Ex. example@gmail.com
        if(is_string($str) && !empty($str) && preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/" , $str) !=0 )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function usernameIsValid($str)
    {
        // username length between 5 to 65.
        if(preg_match("/^\w{5,65}$/", $str))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function passwordIsValid($str)
    {
        // password length between 7 to 65 and it should start with a character.
        if(preg_match("/^[a-zA-Z][0-9a-zA-Z_!$@#^&]{5,20}$/", $str))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public static function lengthIsValid($str, $min, $exact = 0)
    {
        // look for a exact length
        if ($exact) 
        {
            if ( strlen($str) == $min) 
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
        
        //check for minimum length
        if ( strlen($str) >= $min) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    public static function isEmpty($str)
    {
        if(strlen($str) === 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
} 
