<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: login.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $id = $_GET['id'];
    $id = (int)$id;

    $sql = "SELECT * FROM usuarios WHERE id_usuario='$id'";
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();

    $sqlBorrar = "DELETE FROM usuarios WHERE id_usuario='$id'";
    $conn->exec($sqlBorrar);
?>

<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/vac_style.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="../javascript/validaciones.js"></script>
    <title>Usuario Borrado</title>
    <style>
        table{
            border: 5px #9E7E4F;
        }
        th{
            background-color: #BC955C;
            font-size: 25px;
            color: white;
        }
        td{
            background-color: #DFCBA7;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div id="all_cabeza">
    <div id="raya_alta_cabeza"></div>
    <div id="centro_cabeza">
        <div id="imgDiv"></div>
    </div>
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Borrado de Datos de Usuarios</div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>

<div id="botones_abajo_index">
    <a style="text-decoration: none; color: #fff" href="regpersonas.php"><button id="bregmivac" type="button">Registros Personas</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regentidades.php"><button id="bnoconoce" type="button">Entidades</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regmunicipios.php"><button id="baviso" type="button">Municipios</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">✔️Usuarios✔️</button></a>

</div>
<br><br>

<div style="text-align: center">
    <h1>Usuario Borrado</h1>
    <table style="margin: 0 auto;" border="1">
        <thead>
        <th>ID</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Tipo Usuario</th>
        </thead>
        <?php foreach ($rows as $row){ ?>
            <tr>
                <td><?php echo ($row['id_usuario']) ?></td>
                <td><?php echo ($row['usuario']) ?></td>
                <td><?php echo ($row['clave']) ?></td>
                <td><?php echo ($row['tipousuario']) ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<br><br><br><br><br><br>
<footer style="text-align: center">

    <a style="text-decoration: none; color: #fff" href="login.php"><button id="cerrars" type="button">Cerrar Sesión</button></a>
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

