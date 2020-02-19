<?php
include_once("../../config/config.php");
include_once($error);
session_start();
if(!isset($_SESSION['id']))
{
    header("Location:userLogin.php");
    exit;
}


?>

<h1>User Dashboard</h1>
<h3>Add a New Post</h3>
<form action=<?php echo $post?> method="POST">
    Title : <input type="text" name="title"><br>
    Content: <input type="text" name="content"><br>
    <input type="submit" value="Post">


</form>
<h2>Posts</h2>
<?php
include_once("../homePage.php");
?>
<a href="<?php echo $logout?>">Log Out</a>
