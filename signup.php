<!--Header-->
<?php
    require_once("plantillas/headerUnlogged.php");
?>

<div class="container" id="signup-container">
    <div class="row justify-content-center" style="padding:10px;">
        <h1>Crear usuario</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12" id="col-signup">
            <form action="" method="post">
                <div class="form-group">
                    <label><b>Nombre de usuario:</b></label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label><b>Correo electrónico:</b></label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label><b>Contraseña:</b></label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group">
                    <label><b>Repite la contraseña:</b></label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="align:center">Registrar</button>
                </div>
            </form>
        </div>
    </div>

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>