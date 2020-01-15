<?php
    session_start();
    if (isset($_SESSION["user"])) {
      header("Location:home.php");
    }
?>
<!--Header-->
<?php
    require_once("plantillas/headerUnlogged.php");

    //Requires to classes
    require_once("modelos/Connection.php");
    require_once("modelos/UsersManagament.php");
    require_once("modelos/ValidateData.php");

    $nick;
    $email;
    $pass;

    $nickAvailable = false;
    $emailAvailable = false;
    $passwordCorrect = false;
?>

<div class="container" id="index-container">
  <div class="row">
    <div class="col-md-8 no-padding">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
              <h1><b>Controla tu vida financiera</b></h1>
              <hr>
              <p>Tu aplicación donde podrás guardar, ver, editar y eliminar tus movimientos financieros.</p>
              <button type="button" class="btn btn-secondary">Leer más </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 no-padding">
          <h1>Crear cuenta</h1>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
              <div class="form-group">
                  <label><b>Usuario:</b></label>
                  <input class="form-control" type="text" name="txtNickname" required>
              </div>
              <!--Muestra una alerta si ya existe el nombre de usuario-->
              <?php
                if (isset($_POST["btnEnviar"])) {
                  $nick = $_POST["txtNickname"];
                  $conn = new Connection();
                  if (ValidateData::existsNickname($conn, $nick) == false) {
                    $nickAvailable = true;
                  }else {
                    $nickAvailable = false;
                    echo "<div class='alert alert-danger'>
                          El nombre de usuario ya existe.
                          </div>";
                  }
                }
              ?>
              <div class="form-group">
                  <label><b>Correo electrónico:</b></label>
                  <input class="form-control" type="email" name="txtEmail" required>
              </div>
              <!--Muestra una alerta si ya existe el correo electrónico-->
              <?php
                if (isset($_POST["btnEnviar"])) {
                  $email = $_POST["txtEmail"];
                  $conn = new Connection();
                  if (ValidateData::existsEmail($conn, $email) == false) {
                    $emailAvailable = true;
                  }else {
                    $emailAvailable = false;
                    echo "<div class='alert alert-danger'>
                          El correo electrónico ya existe.
                          </div>";
                  }
                }
              ?>
              <div class="form-group">
                  <label><b>Contraseña:</b></label>
                  <input class="form-control" id="txtPassword" onkeyup="checkPassword()" type="password" name="txtPassword" required>
              </div>
              <!--Muestra una alerta si la password no cumple los requisitos-->
              <?php
                if (isset($_POST["btnEnviar"])) {
                  $pass = $_POST["txtPassword"];
                  if (ValidateData::correctPasswordFormat($pass) == true) {
                    $passwordCorrect = true;
                  }else {
                    $passwordCorrect = false;
                    echo "<div class='alert alert-danger'>
                          Debe tener 6 o más carácteres.
                          </div>";
                  }
                }
              ?>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Registrar</button>
              </div>
              <div class="form-group">
                  <p><a href="#">¿Has olvidado tu contraseña?</a></p>
                  <p><a href="login.php">¿Ya eres miembro de Save it?</a></p>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Si todas las variables estan en true conforme los datos introducidos son validos se creea el usuario-->
<?php
  if ($nickAvailable == true && $emailAvailable == true && $passwordCorrect == true) {
    UsersManagament::createUser($conn, $nick, $pass, $email);
    header("Location:login.php");
  }

  //Footer
  require_once("plantillas/footer.php");
?>
<!---->
