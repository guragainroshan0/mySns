<?php

include_once("adminControllerConfig.php");

session_start();
if(!isset($_SESSION['id'])){
    echo "Please login to continue";
    header('Location:'.$homepage);
    exit;
}

$userName = $_POST["uname"];


$a = new dbConnect();
$a->approveUser($userName,$_SESSION['id'],"Admin");

echo "Approved";


?>