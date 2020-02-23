<?php
include_once("../../config/config.php");

?>
<h1> Admin Login</h1>
<form action=<?php echo $adminLogin;?> method="post">
        UserName : <input type="text" name="username" id="uname"><br>
        Password : <input type="password" name="password" id="passwd"><br>
        <input type="submit" value="Login">
    </form>
<a href="registerAdmin.php"> Register</a>