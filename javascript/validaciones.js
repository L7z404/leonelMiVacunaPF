// Para validar curps
var valido;
function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)
        return false;

    function digitoVerificador(curp17) {
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }

    if (validado[2] != digitoVerificador(validado[1]))
        return false;

    return true;
}

function validarInput(input) {
    var curp = input.value.toUpperCase(),
        resultado = document.getElementById("resultado");

    valido = "No válido";

    if (curpValida(curp)) {
        valido = "Válido";
        resultado.classList.add("ok");
    } else {
        resultado.classList.remove("ok");
    }

    resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
}

function curpValidaSubmit(){
    var CURPE = document.getElementById('curp_input').value;


    if (CURPE == null || CURPE.length == 0){
        alert("Debes escribir tu CURP");
        document.getElementById("curp_input").style.background = 'pink';
        document.getElementById("curp_input").focus();
    } else if (valido!="Válido"){
        alert("Debes una CURP válida");
        document.getElementById("curp_input").style.background = 'pink';
        document.getElementById("curp_input").focus();
    } else if (valido=="Válido"){
        document.curpForm.submit();
    }
}

//Validar form
function validaConfCurp(){
    var nombre = document.getElementById('txtNombre').value;
    var apaterno = document.getElementById('txtApellidoP').value;
    var amaterno = document.getElementById('txtApellidoM').value;
    var CURP = document.getElementById('txtCurp').value;
    var fecNac = document.getElementById('txtFechaNac').value;
    var entidadNac = document.getElementById("txtEntidadNac").selectedIndex;
    var sexo = document.getElementById("txtSexo").selectedIndex;
    var postracion = document.getElementById("comboPostracion").selectedIndex;
    var diabetes = document.getElementById("comboDiabetes").selectedIndex;
    var hipertension = document.getElementById("comboHiperten").selectedIndex;

    var entidadvacuna = document.getElementById("comboEntidad").selectedIndex;
    var municipio = document.getElementById("comboMunicipio").selectedIndex;
    var codigopostal = document.getElementById('txtCP').value;
    var telefono = document.getElementById('txtTelefono').value;
    var telefono2 = document.getElementById('txtTelefono2').value;
    var correo = document.getElementById('txtCorreo').value;
    var correo2 = document.getElementById('txtCorreo2').value;
    var DD = document.getElementById('DomicilioDatos').value;




    if(nombre == null || nombre.length === 0 || /^\s+$/.test(nombre) || nombre.length > 45){
        alert("Debes escribir tu nombre.");
        document.getElementById("txtNombre").focus();
        document.getElementById("txtNombre").style.background = '#FFF1FD';
        return false;
    }else if(apaterno == null || apaterno.length === 0 || /^\s+$/.test(apaterno) || apaterno.length > 45){
        alert("Debes escribir tu apellido paterno.");
        document.getElementById("txtApellidoP").focus();
        document.getElementById("txtApellidoP").style.background = '#FFF1FD';
        return false;
    }else if(amaterno == null || amaterno.length === 0 || /^\s+$/.test(amaterno) || amaterno.length > 45){
        alert("Debes escribir tu apellido materno.");
        document.getElementById("txtApellidoM").focus();
        document.getElementById("txtApellidoM").style.background = '#FFF1FD';
        return false;
    } else if(CURP == null || CURP.length === 0 || CURP === "" || CURP.length < 18 || CURP.length > 19){
        alert("No se detecto una curp valida");
        document.getElementById("txtCurp").focus();
        document.getElementById("txtCurp").style.background = '#FFF1FD';
        return false;
    } else if(fecNac == null || fecNac.length === 0 || fecNac === ""){
        alert("No se detecto una fecha de nacimiento");
        document.getElementById("txtFechaNac").focus();
        document.getElementById("txtFechaNac").style.background = '#FFF1FD';
        return false;
    } else if(entidadNac == null || entidadNac == 0){
        alert("Elige una entidad de nacimiento");
        document.getElementById("txtEntidadNac").focus();
        return false;
    } else if(sexo == null || sexo == 0){
        alert("Elige un sexo");
        document.getElementById("txtSexo").focus();
        return false;
    } else if(postracion == null || postracion == 0){
        alert("Elige si esta en estado de postración");
        document.getElementById("comboPostracion").focus();
        return false;
    } else if(diabetes == null || diabetes == 0){
        alert("Elige si padece de diabetes");
        document.getElementById("comboDiabetes").focus();
        return false;
    } else if(hipertension == null || hipertension == 0){
        alert("Elige si padece de hipertension");
        document.getElementById("comboHiperten").focus();
        return false;
    } else if(entidadvacuna == null || entidadvacuna == 0){
        alert("Elige una entidad en donde desea vacunarse");
        document.getElementById("comboEntidad").focus();
        return false;
    } else if(municipio == null || municipio == 0){
        alert("Elige un municipio");
        document.getElementById("comboMunicipio").focus();
        return false;
    } else if(codigopostal == null || codigopostal.length === 0 || codigopostal.length < 5 || codigopostal.length > 6){
        alert("No se detecto un codigo postal valido");
        document.getElementById("txtCP").focus();
        document.getElementById("txtCP").style.background = '#FFF1FD';
        return false;
    } else if(telefono == null || telefono.length === 0 || telefono.length < 10 || telefono.length > 11){
        alert("No se detecto un telefono valido");
        document.getElementById("txtTelefono").focus();
        document.getElementById("txtTelefono").style.background = '#FFF1FD';
        return false;
    } else if(telefono2 == null || telefono2.length === 0 || telefono2.length < 10 || telefono2.length > 11){
        alert("No se detecto un telefono secundario valido");
        document.getElementById("txtTelefono2").focus();
        document.getElementById("txtTelefono2").style.background = '#FFF1FD';
        return false;
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo))){
        alert("Has ingresado un correo invalido!");
        document.getElementById("txtCorreo").focus();
        document.getElementById("txtCorreo").style.background = '#FFF1FD';
        return false;
    }  else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo2))){
        alert("Has ingresado un correo de apoyo invalido!");
        document.getElementById("txtCorreo2").focus();
        document.getElementById("txtCorreo2").style.background = '#FFF1FD';
        return false;
    }  else if(DD == null || DD.length === 0 || DD === ""){
        alert("No has escrito el domicilio o datos de contacto");
        document.getElementById("DomicilioDatos").focus();
        return false;
    }  else{
        document.confCurpForm.submit();
    }
}

//Valida Login
function ValidaFormLogin(){
    var user = document.getElementById("txtusuario").value;

    var pass = document.getElementById("txtpassword").value;

    if(user == null || user.length == 0 || /^\s+$/.test(user))
    {
        alert("Debes escribir tu usuario");
        document.getElementById("txtusuario").focus();
        return false;
    } else if (pass == null || pass.length == 0 || ! /^([0-9])*$/.test(pass)){
        alert("Debes escribir tu NIP numerico");
        document.getElementById("txtpassword").value = "";
        document.getElementById("txtpassword").focus();
        return false;
    }else {
        document.loginForm.submit();
    }
}