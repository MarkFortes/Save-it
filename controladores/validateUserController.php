<?php

  require_once("../modelos/Connection.php");
  require_once("../modelos/UsersManagament.php");

  if (isset($_POST["btnEnviar"])) {
    $nick_email = $_POST["txtUsername"];
    $pass = $_POST["txtPassword"];

    $conn = new Connection();
    if (UsersManagament::validateUser($conn,$nick_email,$pass) == true) {
      session_start();
      $_SESSION["user"] = $nick_email;
      header("Location:../home.php");
    }else {
      header("Location:../login.php");
    }
  }
?>
