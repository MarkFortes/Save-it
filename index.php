<!--Header-->
<?php
    require_once("plantillas/header.php");
?>
    <div class="container main-container">
        <div class="row">
            <div class="col-8">
                <div class="jumbotron jumbotron-fluid hoverable p-4">
                    <div class="container">
                        <h1>Save it</h1>
                        <hr>
                        <p>Tu aplicación donde podrás guardar, ver, editar y eliminar tus movimientos financieros.</p>
                        <button>Read </button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input class="form-control" type="text" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input class="form-control" type="password" placeholder="Enter password">
                        <p><a href="#">¿Has olvidado tu contraseña?</a></p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--Footer-->
<?php
    require_once("plantillas/footer.php");
?>