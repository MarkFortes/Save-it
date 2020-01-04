<?php

  require_once("../Model/Connection.php");
  require_once("../Model/Movements.php");

  $conn = new Connection();
  $movements_list = Movements::showMovements($conn);

  echo "<table border='1px solid black' align='center'>";
  echo "<tr><td>Cantidad</td><td>Fecha</td><td>Accion</td><td>Motivo</td></tr>";
  foreach ($movements_list as $movement) {
    echo "<tr>";
    echo "<td>" . $movement["quantity_mov"] . "</td>";
    echo "<td>" . $movement["date_mov"] . "</td>";
    echo "<td>" . $movement["action_mov"] . "</td>";
    echo "<td>" . $movement["reason_mov"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";

?>
