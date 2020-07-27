
<?php

if (isset($_POST['addGroupMemberBtn'])) {

  require 'db.php';

  $name = $_POST['addInputsName'];
  $phone = $_POST['addPhoneInput'];
  $location = $_POST['locationInput'];

  //CHECK USER IF IS PRESENT
  $checkUsers = $connection->query("SELECT * FROM users WHERE userName=$name");

  if (count($checkUsers)==1) {
    // INSERT DATA IF USER IS PRESENT
    $connection->query("INSERT INTO mygroup (name,phone,location) VALUES('$name','$phone','$location')");
    header("Location:../html/home.php");

  }else{
    header("Location:../html/register-page.php");
    exit();
  }

}
