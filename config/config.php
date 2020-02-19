<?php

/*
this script is made 
in order to save the 
location of the required files
if a single file location is changed changes are needed to be done in all files
so using this changes could be done in a single file
*/
define('HOME_DIR','/home/roshan/Documents/php/www/sns/');
define('URL','/sns/');
$dbHelper = HOME_DIR."dbhelper/helper.php";
$defaultHead = HOME_DIR."pages/default/defaultHead.html";
$defaultFoot = HOME_DIR."pages/default/defaultFoot.html";
$error = HOME_DIR."error.php";
$postModel = HOME_DIR."models/Post.php";
$userModel = HOME_DIR."models/User.php";
$adminModel = HOME_DIR."models/Admin.php";
//$homePage = HOME_DIR."pages/homepage.php";

//for urls
$adminLogin = URL."controller/admin/adminLogin.php";
$userLogin = URL."controller/user/userLogin.php";
$post = URL."controller/post.php";
$registerAdmin = URL."controller/admin/registerAdmin.php";
$registerUser = URL."controller/user/registerUser.php";
$approveUser = URL."controller/admin/approveUser.php";
$userDashboard = URL."controller/user/userDashboard.php";
$logout = URL."controller/logout.php";
?>