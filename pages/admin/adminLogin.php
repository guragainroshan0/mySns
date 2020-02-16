<?php
include_once("../../config/config.php");

?>
<form action=<?php echo $adminLogin;?> method="post">
        UserName : <input type="text" name="username" id="uname"><br>
        Password : <input type="password" name="password" id="passwd"><br>
        <input type="submit" value="Register">
    </form>