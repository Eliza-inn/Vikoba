<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>

    function openUsers(){

      var allUsers = document.getElementsByClassName('allUsers');
      var allGroups = document.getElementsByClassName('allGroups');
      var allPayments = document.getElementsByClassName('allPayments');

      allUsers[0].style.display = 'block';
      allGroups[0].style.display = 'none';
      allPayments[0].style.display = 'none';

    }


    function openGroups(){

      var allUsers = document.getElementsByClassName('allUsers');
      var allGroups = document.getElementsByClassName('allGroups');
      var allPayments = document.getElementsByClassName('allPayments');

      allUsers[0].style.display = 'none';
      allGroups[0].style.display = 'block';
      allPayments[0].style.display = 'none';


    }

    function openPayment(){

      var allUsers = document.getElementsByClassName('allUsers');
      var allGroups = document.getElementsByClassName('allGroups');
      var allPayments = document.getElementsByClassName('allPayments');

      allUsers[0].style.display = 'none';
      allGroups[0].style.display = 'none';
      allPayments[0].style.display = 'block';

    }

    function addMemberToGroup(){

      var addMember = document.getElementsByClassName('add-form');
      var showMember = document.getElementsByClassName('groupMember');

      addMember[0].style.display = 'block';
      showMember[0].style.display = 'none';

    }

    function showMemberInGroup(){

      var addMember = document.getElementsByClassName('add-form');
      var showMember = document.getElementsByClassName('groupMember');

      addMember[0].style.display = 'none';
      showMember[0].style.display = 'block';

    }
    </script>
    <style>

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #000000;
    color: white;
    }

    </style>

    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>

    <ul>
    <li style="text-align:center;font-family: 'Poppins', sans-serif"><a class="active" href="#home">VIKOBA</a></li>
    <li style="text-align:center;font-family: 'Poppins', sans-serif"><a href="#users" onclick="openUsers()">All Users</a></li>
    <li style="text-align:center;font-family: 'Poppins', sans-serif"><a href="#group" onclick="openGroups()">My Group</a></li>
    <li style="text-align:center;font-family: 'Poppins', sans-serif"><a href="#balance" onclick="openPayment()">My Balance</a></li>

    <li style="text-align:center;font-family: 'Poppins', sans-serif"><a href="login-page.php">Log Out</a></li>
  </ul>

  <?php
  $mysqli = new mysqli('localhost','root','','vikobalogindb');
  $results = $mysqli->query("SELECT * FROM users");
   ?>

<!-- ALL USERS TABLE -->
  <div style="margin-left:150px;padding:1px 16px;height:1000px;" class="allUsers">
    <?php require "../php/processing.php"; ?>

    <h2 style="text-align:center;font-family: 'Poppins', sans-serif">My Members</h2>
    <table>
      <thead>
        <tr>
          <th style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white">Name</th>
          <th style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white" colspan="2">Actions</th>
        </tr>
      </thead>

      <?php while($row = $results->fetch_assoc()): ?>
      <tr>
        <td style="font-family: 'Poppins', sans-serif"><?php echo $row['userName']; ?></td>
        <td>
          <a href="../php/processing.php?delete=<?php echo $row['idUsers']; ?>">Delete</a>
        </td>
      </tr>
      <?php endWhile; ?>

    </table>
  </div>



  <div style="margin-left:150px;padding:1px 16px;height:1000px; display:none" class="allGroups">
    <p style="font-family: 'Poppins', sans-serif;text-align:center">CREATE GROUP</p>
    <button name="button"
    style="background-color: #448AFF;
      border: none;
      color: white;
      margin-left: 280px;
      margin-top: 10px;
      padding: 16px 32px;
      text-decoration: none;
      cursor: pointer;"
      onclick="addMemberToGroup()"
      >Add Group Member</button>

      <button name="button"
      style="background-color: #448AFF;
        border: none;
        color: white;
        margin-left: 150px;
        margin-top: 10px;
        padding: 16px 32px;
        text-decoration: none;
        cursor: pointer;"
        onclick="showMemberInGroup()"
        >Show Group Member</button>

<!-- ADD MEMBER TO A GROUP -->
      <div class="add-form" style="margin-top:20px;margin-left:200px">
        <form class="form" action="../php/group.php" method="post">
          <input class="addInputs" type="text"
          style="width: 60%;
          padding: 12px 20px;
          margin-left: 80px;
          margin-top: 20px;
          border: 3px solid #555;
          color: black;"
           id="addInputsText" name="addInputsName" placeholder="Enter Member Name" required><br>
           <input class="addInputs" type="tel"
           style="width: 60%;
           padding: 12px 20px;
           margin-left: 80px;
           margin-top: 20px;
           border: 3px solid #555;
           color: black;"
            id="addPhoneId" name="addPhoneInput" placeholder="Enter Member Phone Number" required><br>

            <input class="addInputs" type="text"
            style="width: 60%;
            padding: 12px 20px;
            margin-left: 80px;
            margin-top: 20px;
            border: 3px solid #555;
            color: black;"
             id="locationId" name="locationInput" placeholder="Enter Member Location" required><br>

          <input type="submit" value="Add" name="addGroupMemberBtn"
          style="background-color: #448AFF;
          border: none;
          color: white;
          margin-left: 130px;
          margin-top: 10px;
          width: 50%;
          padding: 16px 32px;
          text-decoration: none;
          cursor: pointer;">
        </form><br>
      </div>

      <!-- Group member table -->
        <div style="margin-left:90px;padding:1px 16px;height:1000px;display:none" class="groupMember">
          <?php require "../php/processing.php"; ?>
          <h2 style="text-align:center;font-family: 'Poppins', sans-serif">My Group Members</h2>
          <?php
          $mysqli = new mysqli('localhost','root','','vikobalogindb');
          $results = $mysqli->query("SELECT * FROM mygroup");
           ?>
          <table>
            <thead>
              <tr>
                <th style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white">Name</th>
                <th style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white">Location</th>
                <th style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white">Phone Number</th>
                <th colspan="2" style="font-family: 'Poppins', sans-serif;background-color:#448AFF;color:white">Action</th>

              </tr>
            </thead>

            <?php while($row = $results->fetch_assoc()): ?>
            <tr>
              <td style="font-family: 'Poppins', sans-serif"><?php echo $row['name']; ?></td>
              <td style="font-family: 'Poppins', sans-serif"><?php echo $row['location']; ?></td>
              <td style="font-family: 'Poppins', sans-serif"><?php echo $row['phone']; ?></td>
              <td>
                <a href="../php/processing.php?deleteGroup=<?php echo $row['id']; ?>">Delete</a>
              </td>
            </tr>
            <?php endWhile; ?>

          </table>
        </div>



  </div>


  <div
   style="
  display: none;
  margin-left:150px;
  padding:1px 16px;
  height:1000px;
  background-color: white;
  width: 500px;
  height: 300px;"
  class="allPayments">
  <p style="font-family: 'Poppins', sans-serif;text-align:center">Our Group Fund</p>
    <p style="font-family: 'Poppins', sans-serif;text-align:center">Tsh 100,000/=</p>
    <button name="button"
    style="background-color: #448AFF;
      border: none;
      color: white;
      margin-left: 130px;
      margin-top: 10px;
      width: 50%;
      padding: 16px 32px;
      text-decoration: none;
      cursor: pointer;">Edit</button>
  </div>


  </body>
</html>
