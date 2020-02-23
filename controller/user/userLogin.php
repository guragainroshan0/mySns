<?php

//for config files include
include_once("userControllerConfig.php");




session_start();

// //get username and password
$username = $_POST['username'];
$password = $_POST['password'];

//start session


//for reusing user information
$newUser = null;

//connect to database
$a = new dbConnect();


//if user is approved then only log in
$user = $a->getApprovedUser('User');

//for all approved user find the logged in user
for($i=0;$i<count($user);$i++){

    //check for username and password match
    if($user[$i]->getUsername() == $username && password_verify($password,$user[$i]->getPassword())){
        //$_SESSION["username"] = $user[$i]->getUsername();
        
        //assign logged in user to the null variable
        $newUser = $user[$i];
        //set id variable for reuse
        $_SESSION["id"] = $user[$i]->getId();

        header('Location:../../pages/user/userDashboard.php');
        exit;

        
    break;
    }
    

    //if no user is found destroy session
    
}
echo "User not found";
//print the username of the loggedin user
 


?>