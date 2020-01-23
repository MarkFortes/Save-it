<?php
    session_start();
    if (isset($_SESSION["nick"])) {
      header("Location:home.php");
    }
?>

<?php
  //Header
  require_once("plantillas/headerUnlogged.php");

  //Requires
  require_once("modelos/Connection.php");
  require_once("modelos/UsersManagament.php");
?>

<div class="container" id="login-container">
  <div class="row justify-content-center">
    <h1>Inicia sesión en Save it</h1>
  </div>
  <div class="row">
    <div class="col-md-12" id="col-signup">
      <?php
        if (isset($_POST["btnEnviar"])) {
          $nick_email = $_POST["txtUsername"];
          $pass = $_POST["txtPassword"];

          $conn = new Connection();
          if (UsersManagament::validateUser($conn,$nick_email,$pass) == true) {
            session_start();
            $_SESSION["nick"] = $nick_email;
            header("Location:home.php");
          }else {
            echo "<div class='alert alert-danger'>
                  Nombre de usuario o contraseña inválido/a.
                  </div>";
          }
        }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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
