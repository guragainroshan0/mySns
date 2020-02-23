<?php
include_once("../../config/config.php");
include($defaultHead);
?>
<h1> SuperAdmin Login</h1>
<form action=<?php echo $superAdminLogin?> method="post">
        UserName : <input type="text" name="username" id="uname"><br>
        Password : <input type="password" name="password" id="passwd"><br>
        <input type="submit" value="Login">
    </form>
