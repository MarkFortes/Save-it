<!--Header-->
<?php
    require_once("plantillas/header.php");
?>

    <div class="container" id="index-container">
        <div class="row">
            <div class="col-8">
                <div class="jumbotron jumbotron-fluid hoverable p-4">
                    <div class="container">
                        <h1><b>Controla tu vida financiera</b></h1>
                        <hr>
                        <p>Tu aplicación donde podrás guardar, ver, editar y eliminar tus movimientos financieros.</p>
                        <button type="button" class="btn btn-secondary">Leer más </button>
                    </div>
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
                        <p><a href="#">¿Has olvidado tu contraseña?</a></p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>