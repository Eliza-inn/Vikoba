<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "vikobalogindb";

$connection = new mysqli($serverName,$dbUserName,$dbPassword,$dbName) or die(mysqli_error($connection));

?>
