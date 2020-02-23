
<?php

include_once("adminControllerConfig.php");
include($error);
include_once($dbHelper);
include_once($adminModel);

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$admin = new Admin();
$admin->setEmail($email);
$admin->setUsername($username);
$admin->setPassword($password);
$dbHelper = new dbConnect();
$a = $dbHelper->addUser($admin,'Admin');

echo "Wait for approval of Superadmin";

?>
