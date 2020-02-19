<?php 
include_once("/home/roshan/Documents/php/www/sns/config/config.php");

include($defaultHead); ?>
   

<div>
 <?php


include_once($error);
include_once($dbHelper);

 
$a = new dbConnect();

$posts = $a->getPosts(5);


for($i=0;$i<count($posts);$i++){

    $user = $posts[$i]->getPostedBy();
    $username = $a->getUser("User",$user);
  echo  "<div class='post' id=$i style='margin-bottom:50px';>
        
        <div class='title' id='title$i'>
            <p>Title:   ". $posts[$i]->getTitle(). "</p>
        </div>
        <div class='content' id='content$i'>
            <p>Content:   ". $posts[$i]->getContent(). "</p>
        </div>
        <div class='date' id='date$i'>
        <p>". $posts[$i]->getDate(). "</p>
    </div>
    <div class='user' id='user$i'>
        <p>". $username. "</p>
    </div>


    </div>";
    
}

?> 
</div>

<?php  include($defaultFoot); ?>