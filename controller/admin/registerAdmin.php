
<?php

include("../error.php");
include_once("../dbhelper/helper.php");
include_once("../models/Admin.php");

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$admin = new Admin();
$admin->setEmail($email);
$admin->setUsername($username);
$admin->setPassword($password);
$dbHelper = new dbConnect();
$a = $dbHelper->addUser($admin,'a');

echo "Register Admin page;$a";

?>
