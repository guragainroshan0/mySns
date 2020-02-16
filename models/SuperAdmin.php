<?php

class SuperAdmin{
    private $id;
    private $email;
    private $username;
    private $password;



    function __construct($id=1,$email="",$username="",$password=""){
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;

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


    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        //hash here
        $this->password = $password;
    } 

}
?>