<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: login.php");
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
                    <a href="../index.php" style="color: inherit; text-decoration: none"><button class="buttonb" type="button"><strong>Nuevo Registro</strong></button></a>
                </div>

                <div class="item">
                    <a href="adminreg.php" style="color: inherit; text-decoration: none"><button class="buttonb" type="button"><strong>Administrar Registros</strong></button></a>
                </div>

            </div>
        </div>

        &ensp;

        <div class="btn-block">
            <a href="login.php"><button type="button">Cerrar Sesión</button></a>
        </div>
    </form>
</div>

</body>

</html>