<?php

  require_once("modelos/Connection.php");
  require_once("modelos/Movements.php");
  require_once("modelos/UsersManagament.php");

  $conn = new Connection();
  $nick = $_SESSION["nick"];
  $id_user = UsersManagament::getId($conn, $nick);
  $movements_list = Movements::showMovements($conn,$id_user);

  foreach ($movements_list as $movement) {
    echo "<tr>";
    echo "<th scope='row'>" . $movement["id_mov"] . "</td>";
    echo "<td>" . $movement["quantity_mov"] . " €</td>";
    echo "<td>" . $movement["date_mov"] . "</td>";
    echo "<td>" . $movement["action_mov"] . "</td>";
    echo "<td>" . $movement["reason_mov"] . "</td>";
    echo "</tr>";
  }

?>
