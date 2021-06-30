<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $sql = 'SELECT * FROM datos_persona';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();

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
    <title>Registros Personas</title>
    <style>
        table{
            border: 5px #9E7E4F;
        }
        th{
            background-color: #BC955C;
            font-size: 15px;
            color: white;
        }
        td{
            background-color: #DFCBA7;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div id="all_cabeza">
    <div id="raya_alta_cabeza"></div>
    <div id="centro_cabeza">
        <div id="imgDiv"></div>
    </div>
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Administración de Datos de Personas</div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>

<div id="botones_abajo_index">
    <a style="text-decoration: none; color: #fff" href="#"><button id="bregmivac" type="button">✔️Registros Personas✔️</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regentidades.php"><button id="bnoconoce" type="button">Entidades</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regmunicipios.php"><button id="baviso" type="button">Municipios</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">Usuarios</button></a>

</div>
<br><br><br>
<div style="text-align: center">
    <table style="margin: 0 auto;" border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>CURP</th>
            <th>Fecha Nac</th>
            <th>ID_Entidad</th>
            <th>Sexo</th>
            <th>Postración</th>
            <th>Diabetes</th>
            <th>Hiptertension</th>
            <th>ID_Municipio</th>
            <th>CP</th>
            <th>Telefono</th>
            <th>Telefono 2</th>
            <th>Correo</th>
            <th>Correo Apoyo</th>
            <th>Datos/Domicilio</th>
            <th>-</th>
            <th>-</th>
        </thead>
        <?php foreach ($rows as $row){ ?>
        <tr>
            <td>&ensp;<?php echo ($row['id']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['nombre']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['apaterno']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['amaterno']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['curp']) ?>&ensp;</td>
            <td>&ensp;<?php
                $fechaNac = $row['fecNac'];
                $fechaNacFormat = date("d-m-Y", strtotime($fechaNac));
                echo ($fechaNacFormat)
                ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['id_entidad']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['sexo']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['postracion']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['diabetes']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['hipertension']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['id_municipio']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['cp']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['telefono']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['telefono2']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['email']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['emailap']) ?>&ensp;</td>
            <td>&ensp;<?php echo ($row['dom_datos']) ?>&ensp;</td>
            <td><a href="#" style="text-decoration: none">&ensp;Editar&ensp;</a></td>
            <td><a href="#" style="text-decoration: none">&ensp;Borrar&ensp;</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
<br><br><br><br><br><br>
<footer style="text-align: center; position: sticky">
    <button id="cerrars" type="button"><a style="text-decoration: none; color: #fff" href="../index.php">Cerrar Sesión</a></button>
</footer>
</body>
</html>
