<?php

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

include("../error.php");
include_once("../dbhelper/helper.php");
include_once("../models/User.php");


$user = new User();
$user->setEmail($email);
$user->setUsername($username);
$user->setPassword($password);
#$user = new User($email=$email,$username=$user,$password=$password);
$dbHelper = new dbConnect();
$a = $dbHelper->addUser($user,'u');
echo "$a Thank You $username for registering. You will be able to login when admin approves your request.";
?>