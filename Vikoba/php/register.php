
<?php

if (isset($_POST['registerphp'])) {

  require 'db.php';

  $username = $_POST['usernamephp'];
  $email = $_POST['emailphp'];
  $password = $_POST['pswphp'];

  $connection->query("INSERT INTO users (userName,email,password) VALUES('$username','$email','$password')");
  header("Location:..html/login-page.php");

}else{
  header("Location:../html/login-page.php");
  exit();
}
