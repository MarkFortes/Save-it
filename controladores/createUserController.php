<?php

    require_once("../modelos/Connection.php");
    require_once("../modelos/UsersManagament.php");
    require_once("../modelos/ValidateData.php");

    $nick = $_POST["txtNickname"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPassword"];
    $pass2 = $_POST["txtPasswordRepeated"];

    $conn = new Connection();

    if($pass == $pass2){
      $nickAvailable;
      $emailAvailable;
      //Nickname disponible para asignar
      if (ValidateData::existsNickname($conn, $nick) == false) {
        $nickAvailable = true;
      }else {
        $nickAvailable = false;
        echo "Nombre de usuario ya registrado.";
      }

      if (ValidateData::existsEmail($conn, $email) == false) {
        $emailAvailable = true;
      }else {
        $emailAvailable = false;
        echo "Email ya registrado.";
      }

      if ($nickAvailable == true && $emailAvailable == true) {
        UsersManagament::createUser($conn, $nick, $pass, $email);
        echo "Usuario registrado con éxito";
      }else {
        "Usuario no disponible";
      }

    }else{ //Nickname ya existe
        echo "Las contraseñas no coinciden";
    }

?>
