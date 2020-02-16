<?php 

include_once("../../config/config.php");
include($defaultHead); ?>
   

<h1>Admin Register</h1>
    <form action="../controller/registerAdmin.php" method="post">
        Email : <input type="email" name="email" id="email"><br>
        UserName : <input type="text" name="username" id="uname"><br>
        Password : <input type="password" name="password" id="passwd"><br>
        <input type="submit" value="Register">
    </form>

<?php include($defaultFoot); ?>