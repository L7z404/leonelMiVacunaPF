<?php

    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: login.php");
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
    <title>Administración de Registros</title>
</head>
<body>
<div id="all_cabeza">
    <div id="raya_alta_cabeza"></div>
    <div id="centro_cabeza">
        <div id="imgDiv"></div>
    </div>
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Administración de Datos</div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>
<div style="text-align: center; font-family: 'Comic Sans MS', serif; font-size: 30px;">Seleccione una tabla</div>
<br><br><br>
<div id="botones_abajo_index">
    <a style="text-decoration: none; color: #fff" href="regpersonas.php"><button id="bregmivac" type="button">Registros Personas</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regentidades.php"><button id="bnoconoce" type="button">Entidades</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regmunicipios.php"><button id="baviso" type="button">Municipios</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">Usuarios</button></a>

</div>
<br><br><br><br><br><br>

<footer style="text-align: center">

    <button id="cerrars" type="button"><a style="text-decoration: none; color: #fff" href="login.php">Cerrar Sesión</a></button>
    <br><br><br><br>
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
