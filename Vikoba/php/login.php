<?php
if (isset($_POST['loginphp'])) {

  require 'db.php';

  $email = $_POST['emailphp'];
  $password = $_POST['pswphp'];

  $results = $connection->query("SELECT * FROM users WHERE email =$email AND password =$password");

  if (count($results)==1) {
    header("Location:../html/home.php");
  }

}else{
  header("Location:../html/register-page.php");
  exit();
}
