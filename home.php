<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location:index.php");
  }
?>

<?php
  require_once("plantillas/headerLogged.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <!--REGISTRAR-->
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link-registrar" onclick="alertRegistrar()">Registrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nav-link-modficar" onclick="alertModificar()" href="#">Modificar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Eliminar</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <button type="submit" class="btn btn-primary" id="btnRegistrar" style="align:center" name="btnRegistrar">Registrar</button>
            </div>
          </div>
          <!--MODIFICAR-->
          <div class="card text-center">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" id="nav-link-registrar" onclick="alertRegistrar()">Registrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nav-link-modficar" onclick="alertModificar()" href="#">Modificar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Eliminar</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <button type="submit" class="btn btn-primary" id="btnRegistrar" style="align:center" name="btnRegistrar">Registrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
  </div>
</div>

<!--JavaScript-->
<script src="js/movements.js"></script>

<?php
  require_once("plantillas/footer.php");
?>
