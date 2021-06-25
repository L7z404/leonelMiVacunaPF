<?php
    $folio = "fol-" . rand(100000,999999);
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

    <form id="confCenterForm" name="confCurpForm" method="post" action="registroFolio.php">
        <div id="configCurp">
            <div id="info_a_curp">Resultado</div>
            <br>
            <div id="datosPersonaCurp">
                <p class="resultadoP">Ud. ha sido registrado exitosamente.</p>
                <p class="resultadoP">Con el folio: <i class="resultadoI"><strong><?php echo $folio ?></strong></i></p>
                <p class="resultadoP">Espere nuestra llamada donde le indicaremos su fecha y lugar de vacunacion</p>
                <p class="resultadoP">CURP: <i class="resultadoI"><strong><?php echo "poner curp aqui" ?></strong></i></p>
            </div>
            <br>
            <div id="textoConfigCurp" >
                <p>Este aviso NO es una cita para la vacunación, en breve lo contactaremos. La convocatoria a los puntos de vacunación depende de la disponibilidad de las vacunas. <strong>Para facilitar el proceso en el centro de vacunación le sugerimos descargar e imprimir su expediente de vacunación.</strong></p>
            </div>
            <div id="botonesConfigCurp">
                <button id="botonExpe" type="button"><strong>Expediente de vacunación</strong></button>
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
