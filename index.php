<!--Header-->
<?php
    require_once("plantillas/headerUnlogged.php");
?>

    <div class="container" id="index-container">
        <div class="row justify-content-center-center align-items-center">
            <div class="col-8">
                <div class="jumbotron">
                    <h1><b>Controla tu vida financiera</b></h1>
                    <hr>
                    <p>Tu aplicación donde podrás guardar, ver, editar y eliminar tus movimientos financieros.</p>
                    <button type="button" class="btn btn-secondary">Leer más </button>
                </div>
            </div>
            <div class="col-4">
                <h2>Crear cuenta</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label><b>Usuario:</b></label>
                        <input class="form-control" type="text" required>
                    </div>
                    <div class="form-group">
                        <label><b>Correo electrónico:</b></label>
                        <input class="form-control" type="email" required>
                    </div>
                    <div class="form-group">
                        <label><b>Contraseña:</b></label>
                        <input class="form-control" type="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                    <div class="form-group">
                        <p><a href="#">¿Has olvidado tu contraseña?</a></p>
                        <p><a href="login.php">¿Ya eres miembro de Save it?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>