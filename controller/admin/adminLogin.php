<?php

//for config files include
include_once("adminControllerConfig.php");

include_once($error);

//start session
session_start();

// //get username and password
$username = $_POST['username'];
$password = $_POST['password'];

//for reusing user information
$newUser = null;

//connect to database
$a = new dbConnect();


//if user is approved then only log in
$user = $a->getApprovedUser('Admin');

//for all approved user find the logged in user
for($i=0;$i<count($user);$i++){


    echo $user[$i]->getPassword();
    //check for username and password match
    if($user[$i]->getUsername() == $username && password_verify($password,$user[$i]->getPassword())){
        //$_SESSION["username"] = $user[$i]->getUsername();
        
        //assign logged in user to the null variable
        $newUser = $user[$i];
        //set id variable for reuse
        $_SESSION["id"] = $user[$i]->getId();
        echo "User found";
        echo $user[$i]->toString();
        
    break;
    }

    //if no user is found destroy session
    //session_destroy();
}

if(isset($_SESSION["id"]))
{
//print the username of the loggedin user
header('Location:../../pages/admin/adminDashboard.php');
exit;
}
echo "user not logged in";

?>