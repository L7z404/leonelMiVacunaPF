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
    } else{
        document.confCurpForm.submit();
    }
}