<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Proyecto Final - Mi Vacuna Menú</title>
    <meta charset="UTF-8">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilosleo.css" type="text/css" media="screen" />

</head>

<body>
<div class="testbox">
    <form method="post" id="formLogin" name="loginForm">

        <div class="banner">
            <img src="../images/gmx.png">
        </div>

        <div id="container">
            <div id="cont-left" style="width: 100%; float: left; text-align: center">
                <div class="item">
                    <h2>Opciones del sistema</h2>
                </div>

                <div class="item">
                    <button class="buttonb" type="button"><a target="_blank" href="inicio.php" style="color: inherit; text-decoration: none"><strong>Nuevo Registro</strong></a></button>
                </div>

                <div class="item">
                    <button class="buttonb" type="button"><a target="_blank" href="#" style="color: inherit; text-decoration: none"><strong>Administrar Registros</strong></a></button>
                </div>

            </div>
        </div>

        &ensp;

        <div class="btn-block">
            <a href="../index.php"><button type="button">Cerrar Sesión</button></a>
        </div>
    </form>
</div>

</body>

</html>