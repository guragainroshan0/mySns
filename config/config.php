<?php

/*
this script is made 
in order to save the 
location of the required files
if a single file location is changed changes are needed to be done in all files
so using this changes could be done in a single file
*/
define('HOME_DIR','/home/roshan/Documents/php/www/sns/');
$dbHelper = HOME_DIR."dbhelper/helper.php";
$defaultHead = HOME_DIR."pages/default/defaultHead.html";
$defaultFoot = HOME_DIR."pages/default/defaultFoot.html";
$adminLogin = HOME_DIR."controller/admin/adminLogin.php";
$post = HOME_DIR."controller/post.php";
$registerAdmin = HOME_DIR."controller/admin/registerAdmin.php";
$registerUser = HOME_DIR."controller/admin/registerUser.php";
$error = HOME_DIR."error.php";
$postModel = HOME_DIR."models/Post.php";
$userModel = HOME_DIR."models/User.php";
?>