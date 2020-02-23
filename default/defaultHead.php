<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Or Register</title>
</head>
<body>
<?php include_once("../../config/config.php");
       include_once($error);

?>
<nav style="display:inline-block">
    <ul>
       <a href=<?php echo $absUser?>> <li>User Section</li></a>
       <a href=<?php echo $absAdmin?>> <li>Admin Section</li></a>
       <a href=<?php echo $absHome?>> <li>Home</li></a>
       <a href=<?php echo $absSuperAdmin?>><li>Super Admin</li></a>
       
    </ul>
</nav>