var formRegistrar;
var formEditar;
var formEliminar;

function init(){
  formRegistrar = document.getElementById("cardFormRegistrar");
  formEditar = document.getElementById("cardFormEditar");
  formEliminar = document.getElementById("cardFormEliminar");
  console.log("pagina cargada");
}

function showFormRegistrar(){
  console.log("enseñar form registrar");
  formRegistrar.hidden = false;
  formEditar.hidden = true;
  formEliminar.hidden = true;
}

function showFormEditar(){
  console.log("enseñar form editar");
  formRegistrar.hidden = true;
  formEditar.hidden = false;
  formEliminar.hidden = true;
}

function showFormEliminar(){
  console.log("enseñar form eliminar");
  formRegistrar.hidden = true;
  formEditar.hidden = true;
  formEliminar.hidden = false;
}
