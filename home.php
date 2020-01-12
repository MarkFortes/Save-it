<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location:index.php");
  }
?>

<?php
  require_once("plantillas/headerLogged.php");
?>

<p>Bienvenido <?php echo $_SESSION["user"]; ?></p>

<?php
  require_once("plantillas/footer.php");
?>
