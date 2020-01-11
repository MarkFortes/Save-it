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

    public static function createUser($conn, $nick, $pass, $email){
      $query = "INSERT INTO users (nick_user, pass_user, email_user) VALUES (:nick, :pass, :email)";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":nick", $nick);
      $stmt->bindValue(":pass", $pass);
      $stmt->bindValue(":email", $email);
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        return true;
      }else {
        return false;
      }
    }

  }


?>
