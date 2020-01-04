<?php

  require_once("Connection.php");

  class Movements{

    public static function createMovement($conn,$cantidad,$fecha,$accion,$motivo){
      $query = "INSERT INTO movements (id_user_mov,quantity_mov,date_mov,action_mov,reason_mov) VALUES (:id_user,:cantidad,:fecha,:accion,:motivo)";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->bindValue(":id_user", 1);
      $stmt->bindValue(":cantidad", $cantidad);
      $stmt->bindValue(":fecha", $fecha);
      $stmt->bindValue(":accion", $accion);
      $stmt->bindValue(":motivo", $motivo);
      $stmt->execute();
    }

    public static function showMovements($conn){
      $query = "SELECT * FROM movements";
      $stmt = $conn->getConnection()->prepare($query);
      $stmt->execute();
      $movements_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $movements_list;
    }



  }

?>
