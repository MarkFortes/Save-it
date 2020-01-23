<?php

  require_once("ValidateData.php");

  class UsersManagament{

    public static function validateUser($conn, $nick_email, $pass){
      $query = "SELECT * FROM users WHERE (nick_user = :nick OR email_user = :email) AND pass_user = :pass";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":nick", $nick_email);
      $stmt->bindValue(":email", $nick_email);
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

    public static function getId($conn, $nick){
      $query = "SELECT id_user FROM users WHERE nick_user = :nick";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":nick", $nick);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row["id_user"];
    }

  }


?>
