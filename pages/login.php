<?php
    session_start();
    $_SESSION["validado"]="";
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Proyecto Final - Mi Vacuna Login</title>
    <meta charset="UTF-8">
    <link rel="icon" href="../images/favicon.png" type="image/x-icon">
    <script src="../javascript/validaciones.js"></script>
    <link rel="stylesheet" href="../css/estilosleo.css" type="text/css" media="screen" />

</head>

<body>
<div class="testbox">
    <form action="validacion.php" method="post" id="formLogin" name="loginForm">
        <div class="banner">
                <img src="../images/gmx.png">
        </div>
        <div class="item">
            <p><strong>Usuario:</strong></p>
            <input type="text" name="txtusuario" id="txtusuario"  placeholder="Escribe aqui tu usuario..." />
        </div><div class="item">
            <p><strong>NIP:</strong></p>
            <input type="password" name="txtpassword" id="txtpassword"  placeholder="******" />
        </div>


        <div class="btn-block">
            <a><button type="button" onclick="return ValidaFormLogin();">Iniciar Sesión</button></a>
        </div>
    </form>
</div>

</body>

</html>