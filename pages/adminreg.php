<?php
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
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0"></div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>
<div id="botones_abajo_index">
    <button id="bregmivac" type="button"><a style="text-decoration: none; color: #fff" href="regpersonas.php">Registros Personas</a></button>
    &ensp;&ensp;
    <button id="bnoconoce" type="button"><a style="text-decoration: none; color: #fff" href="regentidades.php">Entidades</a></button>
    &ensp;&ensp;
    <button id="baviso" type="button"><a style="text-decoration: none; color: #fff" href="regmunicipios.php">Municipios</a></button>
    &ensp;&ensp;
    <button id="infodosis" type="button"><a style="text-decoration: none; color: #fff" href="regusuarios.php">Usuarios</a></button>

</div>
<br><br><br>
<footer style="text-align: center">
    <button id="cerrars" type="button"><a style="text-decoration: none; color: #fff" href="../index.php">Cerrar Sesión</a></button>
</footer>
</body>
</html>
