<?php

include_once("adminCon.php");
include_once($configFile);
include_once($error);
include_once($dbHelper);


session_start();

if(!isset($_SESSION['id'])){
    echo "Please Login to Continue";
    header('Location:adminLogin.php');
    exit;
}

$a = new dbConnect();

$users = $a->getUnapprovedUser('User');

for($i=0;$i<count($users);$i++){


    echo " Username: ".$users[$i]->getUsername()."<br> Email : ".$users[$i]->getEmail()."</br>";
    echo "<form action=$approveUser method=POST>
    <input type='hidden' name='uname' value='".$users[$i]->getUsername()."'>
    <input type='submit' value='Accept'>
    </form>
    ";
    
}
?>

