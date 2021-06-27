<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/vac_style.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="../javascript/validaciones.js"></script>
    <title>Mi Vacuna</title>
</head>
<body>
    <div id="all_cabeza">
        <div id="raya_alta_cabeza"></div>
        <div id="centro_cabeza">
            <div id="imgDiv"></div>
        </div>
        <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0"> <strong>Se recomienda Chrome para la mejor experiencia</strong> <img style="height: 30px" src="../images/chromeicon.png"></div>
        <div id="raya_baja_cabeza"></div>
    </div>
    <br><br><br>
    <form method="post" action="confCurp.php" id="centerform" name="curpForm">

    <div id="container_dato_curp">
        <div id="info_a_curp">
            <br />
            <p>&ensp;Estoy dentro del rango de edad especificado y me quiero vacunar:&ensp;</p>
            <br />
        </div>
        <br />
        <br />
        <div id="curp">
            <img alt="UserIcon" src="../images/user.png">

            <label for="curp_input">
                <input type="text" id="curp_input" name="curp_input" oninput="validarInput(this)" placeholder="Ingrese su CURP">
            </label>
            <pre id="resultado"></pre>

        </div>
        <br />
        <br />
        <div id="curp_capcha_button">
            <div id="captcha" class="g-recaptcha" data-sitekey="6LfNdjMbAAAAANzlt9qOKiIEqAWsDqhydrtUjDqg"></div>
            <button id="bconfcurp" type="button" onclick="return curpValidaSubmit();">Confirmar CURP</button>
        </div>




    </div>

    </form>
    <br><br><br>
    <div id="botones_abajo_index">
        <button id="bregmivac" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/registro_vacuna_imgns_c6.pdf" target="_blank">Guía Para Registrarse en mivacuna</a></button>
        &ensp;&ensp;
        <button id="bnoconoce" type="button"><a style="text-decoration: none; color: #fff" href="https://www.gob.mx/curp/" target="_blank">¿No conoces tu CURP...? Consúltala aquí</a></button>
        &ensp;&ensp;
        <button id="baviso" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/aviso_de_privacidad_integral.pdf" target="_blank">Aviso de Privacidad</a></button>
        &ensp;&ensp;
        <button id="infodosis" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/info_segunda_dosis.pdf" target="_blank">Información segunda dosis</a></button>

    </div>
    <br><br><br>
    <footer>
        <div id="raya_baja_footer">
            <p style="color: #fff; text-align: center; font-family: 'Comic Sans MS',serif">El horario de operación es continuo de lunes a domingo.</p>
        </div>
        <br>
        <div id="texto_abajo_footer">
            <p style="text-align: center; color: grey; font-family: 'Comic Sans MS',serif; font-size: 14px">La aplicación de la Política Nacional de Vacunación es de carácter público, ajena a cualquier partido político. Queda prohibido su uso para fines distintos a los establecidos.</p>
        </div>
        <div id="raya_baja_ultima_footer"></div>
    </footer>
</body>
</html>