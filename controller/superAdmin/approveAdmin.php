<?php

include_once("superAdminControllerConfig.php");
include_once($error);
include_once($dbHelper);
session_start();
//echo $_SESSION['id'];
if(!isset($_SESSION['id'])){
    echo "Please login to continue";
    header('Location:'.$homepage);
    exit;
}

 $userName = $_POST["uname"];
 echo $_SESSION["id"];
 $a = new dbConnect();

 $a->approveUser($userName,$_SESSION['id'],"Admin");

 echo $userName." Approved";


?>