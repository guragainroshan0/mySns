<?php

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

include_once("../../config/config.php");

include($error);
include_once($dbHelper);
include_once($userModel);


$user = new User();
$user->setEmail($email);
$user->setUsername($username);
$user->setPassword($password);
#$user = new User($email=$email,$username=$user,$password=$password);
$dbHelper = new dbConnect();
$a = $dbHelper->addUser($user,'User');
echo "Thank You $username for registering. You will be able to login when admin approves your request.";
?>