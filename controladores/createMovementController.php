<?php

  require_once("../Model/Connection.php");
  require_once("../Model/Movements.php");

  $cantidad = $_POST["txtCantidad"];
  $fecha = $_POST["dateFecha"];
  $accion = $_POST["radioAccion"];
  $motivo = $_POST["txtMotivo"];

  //////////////////////////////////////////////////////////////////////////////

  if (isset($_POST["btnRegistrarMovimiento"])) {
    $conn = new Connection();
    Movements::createMovement($conn,$cantidad,$fecha,$accion,$motivo);
    header("Location:../View/home.php");
  }


 ?>
