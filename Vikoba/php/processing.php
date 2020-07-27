<?php
require "db.php";



if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $connection->query("DELETE FROM users WHERE idUsers=$id");
header("Location:../html/home.php");
}

if (isset($_GET['deleteGroup'])) {
  $id = $_GET['deleteGroup'];
  $connection->query("DELETE FROM mygroup WHERE id=$id");
  header("Location:../html/home.php");
}



?>
