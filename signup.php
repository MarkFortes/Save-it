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
<!---->

<div class="container" id="signup-container">
    <div class="row justify-content-center">
        <h1>Crea tu usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12" id="col-signup">
            <form action="controladores/createUserController.php" method="post">
                <div class="form-group">
                    <label><b>Nombre de usuario:</b></label>
                    <input class="form-control" type="text" name="txtNickname" required>
                </div>
                <div class="form-group">
                    <label><b>Correo electrónico:</b></label>
                    <input class="form-control" type="text" name="txtEmail" required>
                </div>
                <div class="form-group">
                    <label><b>Contraseña:</b></label>
                    <input class="form-control" id="txtPassword" onkeyup="checkPassword()" type="password" name="txtPassword" required>
                </div>
                <!--Alert-->
                <div class="alert alert-danger" id="alert-password-length" hidden>
                    Debe tener 6 o más carácteres.
                </div>
                <!---->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" id="btnEnviar" style="align:center" name="btnEnviar" disabled>Registrar</button>
                </div>
            </form>
            <div class="alert alert-success">
                Todo correcto.
            </div>
        </div>
    </div>
</div>

<!--JS-->
<script src="js/alertsSignUp.js"></script>
<!---->

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>
<!---->
