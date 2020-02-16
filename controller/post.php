<?php

include_once("../error.php");
include_once("../dbhelper/helper.php");
include_once("../models/Post.php");

$title = $_POST["title"];
$likes = 0;
$content = $_POST["content"];

$dbHelper = new dbConnect();
$post = new Post($title=$title,$content=$content,$likes=$likes);
$a = $dbHelper->addPost($post);
echo $a;

?>