<?php

class User{
    private $id;
    private $email;
    private $username;
    private $password;
    private $approvedby;



    function __construct($id=1,$email="",$username="",$password="",$approvedby=0){
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->approvedby = $approvedby;
    }

    public function getId(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getApprovedBy(){
        return $this->approvedby;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function setUsername($username){
        $this->username = htmlspecialchars($username);
    }

    public function setPassword($password){
        //hash here
        $this->password = password_hash($password,PASSWORD_BCRYPT);
    }

    public function setApprovedBy($pid)
    {
        $this->approvedby = $pid;
    }  
    public function toString(){
        echo "<br>$this->username";
    }

}

?>