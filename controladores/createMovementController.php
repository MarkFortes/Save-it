<?php

  require_once("../Model/Connection.php");
  require_once("../Model/Movements.php");

  //////////////////////////////////////////////////////////////////////////////

  if (isset($_POST["btnRegistrarMovimiento"])) {
    $cantidad = $_POST["txtCantidad"];
    $fecha = $_POST["dateFecha"];
    $accion = $_POST["radioAccion"];
    $motivo = $_POST["txtMotivo"];

    $conn = new Connection();
    Movements::createMovement($conn,$cantidad,$fecha,$accion,$motivo);
    header("Location:../View/home.php");
  }


 ?>
