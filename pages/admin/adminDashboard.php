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
echo "<h3>Approve Users</h3>";

for($i=0;$i<count($users);$i++){


    echo " Username: ".htmlentities($users[$i]->getUsername())."<br> Email : ".$users[$i]->getEmail()."</br>";
    echo "<form action=$approveUser method=POST>
    <input type='hidden' name='uname' value='".htmlentities($users[$i]->getUsername())."'>
    <input type='submit' value='Accept'>
    </form>
    ";
    
}
?>

<a href="<?php echo $logout?>">Log Out</a>

