<?php
include_once("../../config/config.php");
include_once($error);


?>
<h1>User Login</h1>
<form action=<?php echo $userLogin;?> method="post">
        UserName : <input type="text" name="username" id="uname"><br>
        Password : <input type="password" name="password" id="passwd"><br>
        <input type="submit" value="Login">
</form>