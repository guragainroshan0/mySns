<?php

include_once("../config/config.php");
include_once($dbHelper);

$userDashboard = "../pages/user/userDashboard.php";

session_start();

if(isset($_SESSION["id"])){
    
 $postTitle = $_POST["title"];
 $likes = 0;
 $content = $_POST["content"];


 $dbHelper = new dbConnect();

$post = new Post($title=$postTitle,$content=$content,$postedby=$_SESSION["id"]);

$a = $dbHelper->addPost($post);
header("Location:/sns/pages/user/userDashboard.php");
exit;
}
else{
    echo "Login first";
}


?>