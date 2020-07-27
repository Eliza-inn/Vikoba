<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index-design.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="login">
      <form class="form" action="../php/login.php" method="post">
        <p style="text-align:center;font-family: 'Poppins', sans-serif;margin-top:20px;">Welcom Back!</p>
        <input class="userInputs" type="email" id="email" name="emailphp" placeholder="Email OR Username" required><br>
        <input class="userInputs" type="password" id="password" name="pswphp" placeholder="Password" required>
        <input type="submit" value="Login" name="loginphp">
      </form><br>
      <a href="register-page.php" style="margin-left:180px;">Don't Have an Account!</a>
    </div>
  </body>
</html>
