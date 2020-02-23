<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Or Register</title>
</head>
<body>

<?php
include_once("../../config/config.php");

?>

<ul>
    <li><a href=<?php echo $absAdminLogin?>>Admin</a></li>
    <li><a href=<?php echo $absUserLogin?>>User</a></li>
    <li><a href=<?php echo $absSuperAdminLogin?>>SuperUser</a></li>
</ul>