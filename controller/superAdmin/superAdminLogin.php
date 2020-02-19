<?php

//for config files include
include_once("superAdminControllerConfig.php");



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

    //check for username and password match
    if($user[$i]->getUsername() == $username && $user[$i]->getPassword() == $password){
        //$_SESSION["username"] = $user[$i]->getUsername();
        
        //assign logged in user to the null variable
        $newUser = $user[$i];
        //set id variable for reuse
        $_SESSION["id"] = $user[$i]->getId();

        
    break;
    }

    //if no user is found destroy session
    session_destroy();
}

//print the username of the loggedin user
header('Location:../../pages/admin/adminDashboard.php');
exit;


?>