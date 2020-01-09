<?php

  require_once("validateData.php");

  class UsersManagament{

    public static function validateUser($conn, $nick, $pass){
      $query = "SELECT * FROM users WHERE nick_user = :nick AND pass_user = :pass";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":nick", $nick);
      $stmt->bindValue(":pass", $pass);
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        return true;
      }else {
        return false;
      }
    }

    public static function createUser($conn, $nick, $email, $pass, $pass2){
      
    }

  }


?>
