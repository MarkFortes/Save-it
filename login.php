<?php
    session_start();
    if (isset($_SESSION["user"])) {
      header("Location:home.php");
    }
?>
<!--Header-->
<?php
    require_once("plantillas/headerUnlogged.php");
?>

<div class="container" id="login-container">
  <div class="row justify-content-center">
    <h1>Iniciar sesión</h1>
  </div>
  <div class="row">
    <div class="col-md-12" id="col-signup">
      <form action="controladores/validateUserController.php" method="post">
        <div class="form-group">
          <label><b>Nombre de usuario o correo electrónico:</b></label>
          <input class="form-control" type="text" name="txtUsername">
        </div>
        <div class="form-group">
          <label><b>Contraseña:</b></label>
          <input class="form-control" type="password" name="txtPassword">
        </div>
        <div class="form-group text-center">
          <input type="submit" class="btn btn-primary" style="align:center" name="btnEnviar" value="Entrar">
        </div>
      </form>
    </div>
  </div>
</div>
<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>
