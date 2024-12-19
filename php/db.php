<?php
require_once 'dbconf.php';
 class DB extends SQLite3 {

    const DATABASE_NAME='e_teacher.db';
    const BCRYPT_COST=14;
 
    function __construct(){
        $this->open(self::DATABASE_NAME);
    }

    public function authenticateUser($username,$password){
        if($this->userExists($username)){
            $storedPassword=$this->getUsersPassword($username);
            if (password_verify($password,$storedPassword)){
                $authenticated=true;
            }
            else{
                $authenticated=false;
            }
        }
        else{
            $authenticated=false;
        }
        return $authenticated;
    }
    
    protected function userExists($username){
        $sql = 'SELECT COUNT(*) AS count FROM user WHERE username = :username';
        $statement = $this->prepare($sql);
        if (!$statement) {
            throw new Exception("Failed to prepare statement: " . $this->lastErrorMsg());
        }
        $statement->bindValue(':username', $username);
        $result = $statement->execute();
        $row = $result->fetchArray();
        $exists = ($row['count'] == 1) ? true : false;
        $statement->close();
        return $exists;
    }
    

    protected function getUsersPassword($username){
        $sql='SELECT password
            FROM user
            WHERE username=:username';

        $statement=$this->prepare($sql);
        $statement->bindValue(':username',$username);
    
        $result=$statement->execute();
        $row=$result->fetchArray();
        $password=$row['password'];
    
        $statement->close();
        return$password;
    }
    
}