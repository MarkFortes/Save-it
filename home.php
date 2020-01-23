<?php
  session_start();
  if (!isset($_SESSION["nick"])) {
    header("Location:index.php");
  }
?>

<?php
  require_once("plantillas/headerLogged.php");
?>

<div class="container" id="home-container">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">


          <!--REGISTRAR-->
          <div class="card text-center" id="cardFormRegistrar">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active">Registrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormEditar()" href="#">Editar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormEliminar()" href="#">Eliminar</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Registrar movimiento</h5>
              <form action="controladores/movementsActionsController.php" method="post">
                <div class="form-group">
                  <label>Cantidad</label>
                  <input class="form-control" type="number" name="txtCantidad" required>
                </div>
                <div class="form-group">
                  <label>Fecha</label>
                  <input class="form-control" type="date" name="txtFecha" required>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioAccion" value="ingreso" required>
                    <label class="form-check-label">
                      Ingreso
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioAccion" value="retiro" required>
                    <label class="form-check-label">
                      Retiro
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label>Motivo</label>
                  <input class="form-control" type="text" name="txtMotivo" required>
                </div>
                <input type="submit" class="btn btn-primary" style="align:center" name="btnRegistrarMovimiento" value="!Registrar!">
              </form>
            </div>
          </div>


          <!--EDITAR-->
          <div class="card text-center" id="cardFormEditar" hidden>
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormRegistrar()" href="#">Registrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active">Editar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormEliminar()" href="#">Eliminar</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Editar movimiento</h5>
              <form class="" action="" method="post">

              </form>
              <button type="submit" class="btn btn-primary" style="align:center" name="btnEditarMovimiento">¡Editar!</button>
            </div>
          </div>


          <!--ELIMINAR-->
          <div class="card text-center" id="cardFormEliminar" hidden>
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormRegistrar()" href="#">Registrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="showFormEditar()" href="#">Editar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active">Eliminar</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Eliminar movimiento</h5>
              <form action="controladores/movementsActionsController.php" method="post">
                <div class="form-group">
                  <label>ID de movimiento</label>
                  <input class="form-control" type="number" name="txtIdMovimiento" required>
                </div>
                <button type="submit" class="btn btn-primary" style="align:center" name="btnEliminarMovimiento">¡Eliminar!</button>
              </form>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Accion</th>
                <th scope="col">Motivo</th>
              </tr>
            </thead>
            <tbody>
              <?php include_once("controladores/showMovementsController.php"); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!--JavaScript-->
<script src="js/movements.js" onload="init()"></script>

<?php
  require_once("plantillas/footer.php");
?>
