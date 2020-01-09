<?php

    require_once("../modelos/Connection.php");
    require_once("../modelos/UsersManagament.php");
    require_once("../modelos/ValidateData.php");

    $nick = $_POST["txtNickname"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPassword"];
    $pass2 = $_POST["txtPasswordRepeated"];

    $conn = new Connection();

    if(ValidateData::existsNickname($conn, $nick) == false){ //Nickname no existe
        echo "Usuario disponible";
    }else{ //Nickname ya existe
        echo "Usuario ya existe";
    }

?>