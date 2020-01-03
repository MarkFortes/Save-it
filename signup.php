<!--Header-->
<?php
    require_once("plantillas/header.php");
?>

<div class="container" id="signup-container">
        <div class="row">
                <form action="" method="post">
                <div class="form-group">
                    <label><b>Nombre de usuario:</b></label>
                    <input class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label><b>Correo electrónico:</b></label>
                    <input class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                    <label><b>Contraseña:</b></label>
                    <input class="form-control" type="password" placeholder="">
                </div>
                <div class="form-group">
                    <label><b>Repite la contraseña:</b></label>
                    <input class="form-control" type="password" placeholder="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
    </div>

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>