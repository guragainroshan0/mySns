<?php

include_once("superAdminCon.php");
include_once($configFile);
include_once($error);
include_once($dbHelper);
include($defaultHead);

session_start();

if(!isset($_SESSION['id'])){
    echo "Please Login to Continue";
    header('Location:superAdminLogin.php');
    exit;
}

$a = new dbConnect();

$users = $a->getUnapprovedUser('Admin');
echo "<h3>Approve Users</h3>";

for($i=0;$i<count($users);$i++){


    echo " Username: ".htmlentities($users[$i]->getUsername())."<br> Email : ".$users[$i]->getEmail()."</br>";
    echo "<form action=$approveAdmin method=POST>
    <input type='hidden' name='uname' value='".htmlentities($users[$i]->getUsername())."'>
    <input type='submit' value='Accept'>
    </form>
    ";
    
}
?>

<a href="<?php echo $logout?>">Log Out</a>

//super admin works left