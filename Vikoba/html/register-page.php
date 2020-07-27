<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index-design.css" type="text/css">
    <script src="../javascript/index.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="register">
      <form class="form" action="../php/register.php" method="post" onsubmit="return checkPasswordRegister()">
        <p style="text-align:center;font-family: 'Poppins', sans-serif;margin-top:20px;">Create Account</p>
        <input class="userInputs" type="text" id="username" name="usernamephp" placeholder="User Name" required><br>
        <input class="userInputs" type="email" id="email" name="emailphp" placeholder="Email" required><br>
        <input class="userInputs" type="password" id="psw" name="pswphp" placeholder="Password" required><br>
        <input class="userInputs" type="password" id="psw-repeat" name="psw-repeat-php" placeholder="Confirm Password" required><br>
        <input type="submit" value="Register" name="registerphp">

      </form><br><br>

      <a href="login-page.php" style="margin-left:180px;">Already have an account!</a>
    </div>

  </body>
</html>
