<?php
include_once("User.php");

class Admin extends User{
    private $id;
    private $email;
    private $username;
    private $password;
    private $approvedby;



    function __construct($id=1,$email="",$username="",$password="",$approvedby=1){
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->approvedby = $approvedby;
    }

    
}
?>