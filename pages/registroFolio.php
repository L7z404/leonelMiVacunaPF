<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $folio = "fol-" . rand(100000,999999);

    $nombre = $_POST["txtNombre"];
    $apaterno = $_POST["txtApellidoP"];
    $amaterno = $_POST["txtApellidoM"];
    $infocurp = $_POST["txtCurp"];
    $fecNac = $_POST["txtFechaNac"];
    $entidad = $_POST["txtEntidadNac"];
    $sexo = $_POST["txtSexo"];
    $postracion = $_POST["comboPostracion"];
    $diabetes = $_POST["comboDiabetes"];
    $hiperten = $_POST["comboHiperten"];

    $entidadLugar = $_POST["comboEntidad"];
    $municipio = $_POST["comboMunicipio"];
    $codigoP = $_POST["txtCP"];
    $telefono = $_POST["txtTelefono"];
    $telefono2 = $_POST["txtTelefono2"];
    $correo = $_POST["txtCorreo"];
    $correo2 = $_POST["txtCorreo2"];
    $domDatos = $_POST["DomicilioDatos"];


    $sql = "INSERT INTO `datos_persona` (`id`, `nombre`, `apaterno`, `amaterno`, `curp`, `fecNac`, `id_entidad`, 
                             `sexo`, `postracion`, `diabetes`, `hipertension`, `id_municipio`, `cp`, `telefono`, 
                             `telefono2`, `email`, `emailap`, `dom_datos`, `folio` , `id_entidad_lugar`) 
                             VALUES (NULL, '$nombre', '$apaterno', '$amaterno', '$infocurp', '$fecNac', '$entidadLugar', 
                                     '$sexo', '$postracion', '$diabetes', '$hiperten', '$municipio', '$codigoP', '$telefono', 
                                     '$telefono2', '$correo', '$correo2', '$domDatos', '$folio', '$entidad')";

    $conn->exec($sql);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/vac_style.css" type="text/css">
    <link rel="stylesheet" href="../css/vac_style2.css" type="text/css">
    <title>Mi Vacuna - Folio</title>
    <script language="JavaScript">
        window.addEventListener('beforeunload', function (e) {
            e.preventDefault();
            e.returnValue = '';
        });

        function alertandredirect(){
            alert("Sera llamado al numero de telefono propocionado. Regresando a inicio.");
            window.location.href = "inicio.php";
        }
    </script>
</head>
<body>

    <div id="all_cabeza">
        <div id="raya_alta_cabeza"></div>
        <div id="centro_cabeza">
            <div id="imgDiv"></div>
        </div>
        <div id="pie_cabeza"></div>
        <div id="raya_baja_cabeza"></div>
    </div>
    <br><br><br>
    <div id="botones_abajo_index" >
        <button id="bregmivac" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/registro_vacuna_imgns_c6.pdf" target="_blank">Guía Para Registrarse en mivacuna</a></button>
        &ensp;&ensp;
        <button id="bnoconoce" type="button"><a style="text-decoration: none; color: #fff" href="https://www.gob.mx/curp/" target="_blank">¿No conoces tu CURP...? Consúltala aquí</a></button>
        &ensp;&ensp;
        <button id="baviso" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/aviso_de_privacidad_integral.pdf" target="_blank">Aviso de Privacidad</a></button>
        &ensp;&ensp;
        <button id="infodosis" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/info_segunda_dosis.pdf" target="_blank">Información segunda dosis</a></button>

    </div>
    <br><br><br>

    <form id="confCenterForm" name="confCurpForm" method="post" action="reporte_imprimir.php">
        <div id="configCurp">
            <div id="info_a_curp">Resultado</div>
            <br>
            <div id="datosPersonaCurp">
                <p class="resultadoP">Ud. ha sido registrado exitosamente.</p>
                <p class="resultadoP">Con el folio:<input type="text" id="txtfolio" name="txtfolio" style="width: 20%; background-color: #d4d3d3" value="<?php echo $folio ?>" /></p>
                <p class="resultadoP">Espere nuestra llamada donde le indicaremos su fecha y lugar de vacunacion</p>
                <p class="resultadoP">CURP:<input type="text" id="txtCurp" name="txtCurp" style="width: 20%; background-color: #d4d3d3" value="<?php echo $infocurp ?>" /></p>
            </div>
            <br>
            <div id="textoConfigCurp" >
                <p>Este aviso NO es una cita para la vacunación, en breve lo contactaremos. La convocatoria a los puntos de vacunación depende de la disponibilidad de las vacunas. <strong>Para facilitar el proceso en el centro de vacunación le sugerimos descargar e imprimir su expediente de vacunación.</strong></p>
            </div>
            <div id="botonesConfigCurp">
<!--                <a href="reporte_imprimir.php?folio=--><?php //echo $folio?><!--&curp=--><?php //echo $infocurp ?><!--"><button id="botonExpe" type="button"><strong>Expediente de vacunación</strong></button></a>-->
                <button id="botonExpe" type="submit"><strong>Expediente de vacunación</strong></button>
                <br><br>
                <button id="botonExpes" type="button" onclick="alertandredirect()"><strong>En caso de error, solicitar llamada de aclaración</strong></button>

            </div>
            <div id="espacioDatos" style="margin-bottom: 2em"></div>
        </div>

    </form>
</body>
    <footer>
    <br><br>
    <div id="texto_abajo_footer">
        <p style="text-align: center; color: grey; font-family: 'Comic Sans MS',serif; font-size: 14px">La aplicación de la Política Nacional de Vacunación es de carácter público, ajena a cualquier partido político. Queda prohibido su uso para fines distintos a los establecidos.</p>
    </div>
    <div id="raya_baja_ultima_footer"></div>
</footer>
</html>
