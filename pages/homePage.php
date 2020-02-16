<?php 
include_once("../config/config.php");

include($defaultHead); ?>
   

<div>
 <?php


include_once("../error.php");
include_once('../dbhelper/helper.php');

 
$a = new dbConnect();

$posts = $a->getPosts(5);


for($i=0;$i<count($posts);$i++){

    echo $posts[$i]->getId();
  echo  "<div class='post' id=$i>
        
        <div class='title' id='title$i'>
            <p>". $posts[$i]->getTitle(). "</p>
        </div>
        <div class='content' id='content$i'>
            <p>". $posts[$i]->getContent(). "</p>
        </div>
        <div class='date' id='date$i'>
        <p>". $posts[$i]->getDate(). "</p>
    </div>


    </div>";
    
}

?> 
</div>

<?php  include($defaultFoot); ?>