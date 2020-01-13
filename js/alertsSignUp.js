//ALERTS SIGN UP

var nickname;
var email;
var password;

var validNickname = false;
var validEmail = false;
var validPassword = false;

function checkPassword(){
    password = document.getElementById("txtPassword").value;
    if(password.length < 6){
        alertPasswordLength(false); //Muestra la alerta de contraseña incorrecta
        validPassword = false;
    }else{
        alertPasswordLength(true); //Oculta la alerta de contraseña incorrecta
        validPassword = true;
    }
    checkForm();
}

function checkForm(){
    if(validPassword == true){
        document.getElementById("btnEnviar").disabled = false; //Habilita el boton
    }else{
        document.getElementById("btnEnviar").disabled = true; //Deshabilita el boton
    }
}

//////////////////////////////////////////

function showAlertNickname(){

}

function showAlertEmail(){

}

function alertPasswordLength(boolean){
    document.getElementById("alert-password-length").hidden = boolean;
}
