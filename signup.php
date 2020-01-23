<?php
    session_start();
    if (isset($_SESSION["nick"])) {
      header("Location:home.php");
    }
?>

<?php
    //Header
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

<!--FORMULARIO-->
<div class="container" id="signup-container">
    <div class="row justify-content-center">
        <h1>Crea tu usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12" id="col-signup">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label><b>Nombre de usuario:</b></label>
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
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" id="btnEnviar" style="align:center" name="btnEnviar">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/FORMULARIO-->

<?php
  if ($nickAvailable == true && $emailAvailable == true && $passwordCorrect == true) {
    UsersManagament::createUser($conn, $nick, $pass, $email);
    header("Location:login.php");
  }

  //Footer
  require_once("plantillas/footer.php");
?>
<!---->
