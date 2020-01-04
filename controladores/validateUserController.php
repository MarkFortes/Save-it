<?php

  require_once("../modelos/Connection.php");
  require_once("../modelos/UsersManagament.php");

  $user = $_POST["txtUsername"];
  $pass = $_POST["txtPassword"];

  $conn = new Connection();
  if (UsersManagament::validateUser($conn,$user,$pass) == true) {
    header("Location:../home.php");
  }else {
    header("Location:../login.php");
  }
?>
