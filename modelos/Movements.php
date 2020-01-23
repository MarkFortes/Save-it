<?php

  require_once("Connection.php");

  class Movements{

    public static function createMovement($conn,$id_user,$cantidad,$fecha,$accion,$motivo){
      $query = "INSERT INTO movements (id_user_mov,quantity_mov,date_mov,action_mov,reason_mov) VALUES (:id_user,:cantidad,:fecha,:accion,:motivo)";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":id_user", $id_user);
      $stmt->bindValue(":cantidad", $cantidad);
      $stmt->bindValue(":fecha", $fecha);
      $stmt->bindValue(":accion", $accion);
      $stmt->bindValue(":motivo", $motivo);
      $stmt->execute();
    }

    public static function deleteMovement($conn, $id_mov){
      $query = "DELETE FROM movements WHERE id_mov = :id_mov";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":id_mov", $id_mov);
      $stmt->execute();
    }

    public static function showMovements($conn, $id_user){
      $query = "SELECT * FROM movements WHERE id_user_mov = :id_user ORDER BY date_mov DESC";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":id_user", $id_user);
      $stmt->execute();
      $movements_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $movements_list;
    }



  }

?>
