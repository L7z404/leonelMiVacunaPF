<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: login.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $id = $_GET['id'];
    $id = (int)$id;

    $sql = "SELECT d.id, d.nombre, d.apaterno, d.amaterno, d.curp, d.fecNac, d.sexo, d.postracion, 
       d.diabetes, d.hipertension, d.cp, d.telefono, d.telefono2, d.email, d.emailap, d.dom_datos, 
       d.folio, e.entidad, m.municipio FROM datos_persona d INNER JOIN entidades e ON d.id_entidad = e.id_entidad 
           INNER JOIN municipios m ON d.id_municipio = m.id WHERE d.id='$id'";
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();

    $sqlBorrar = "DELETE FROM datos_persona WHERE id='$id'";
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
    <title>Persona Borrada</title>
    <style>
        table{
            border: 5px #9E7E4F;
            overflow-y:scroll;
            height:fit-content;
            display:block;
        }
        th{
            background-color: #BC955C;
            font-size: 20px;
            color: white;
        }
        td{
            background-color: #DFCBA7;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div id="all_cabeza">
    <div id="raya_alta_cabeza"></div>
    <div id="centro_cabeza">
        <div id="imgDiv"></div>
    </div>
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Borrado de Datos de Personas</div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>

<div id="botones_abajo_index">
    <a style="text-decoration: none; color: #fff" href="regpersonas.php"><button id="bregmivac" type="button">??????Registros Personas??????</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regentidades.php"><button id="bnoconoce" type="button">Entidades</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regmunicipios.php"><button id="baviso" type="button">Municipios</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">Usuarios</button></a>

</div>
<br><br>

<div style="text-align: center">
    <h1>Persona Borrada</h1>
    <table style="margin: 0 auto;" border="1">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>CURP</th>
        <th>Fecha Nac</th>
        <th>Sexo</th>
        <th>Postraci??n</th>
        <th>Diabetes</th>
        <th>Hiptertension</th>
        <th>Entidad de vacunaci??n</th>
        <th>Municipio de vacunaci??n</th>
        <th>CP</th>
        <th>Telefono</th>
        <th>Telefono 2</th>
        <th>Correo</th>
        <th>Correo Apoyo</th>
        <th>Datos/Domicilio</th>
        </thead>
        <?php foreach ($rows as $row){ ?>
        <tr>
            <td><?php echo ($row['id']) ?></td>
            <td><?php echo ($row['nombre']) ?></td>
            <td><?php echo ($row['apaterno']) ?></td>
            <td><?php echo ($row['amaterno']) ?></td>
            <td><?php echo ($row['curp']) ?></td>
            <td><?php
                $fechaNac = $row['fecNac'];
                $fechaNacFormat = date("d-m-Y", strtotime($fechaNac));
                echo ($fechaNacFormat)
                ?></td>
            <td><?php echo ($row['sexo']) ?></td>
            <td><?php echo ($row['postracion']) ?></td>
            <td><?php echo ($row['diabetes']) ?></td>
            <td><?php echo ($row['hipertension']) ?></td>
            <td><?php echo ($row['entidad']) ?></td>
            <td><?php echo ($row['municipio']) ?></td>
            <td><?php echo ($row['cp']) ?></td>
            <td><?php echo ($row['telefono']) ?></td>
            <td><?php echo ($row['telefono2']) ?></td>
            <td><?php echo ($row['email']) ?></td>
            <td><?php echo ($row['emailap']) ?></td>
            <td><?php echo ($row['dom_datos']) ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
<br><br><br><br><br><br>
<footer style="text-align: center">

    <a style="text-decoration: none; color: #fff" href="login.php"><button id="cerrars" type="button">Cerrar Sesi??n</button></a>
    <br><br><br><br>
    <div id="raya_baja_footer">
        <p style="color: #fff; text-align: center; font-family: 'Comic Sans MS',serif">El horario de operaci??n es continuo de lunes a domingo.</p>
    </div>
    <br>
    <div id="texto_abajo_footer">
        <p style="text-align: center; color: grey; font-family: 'Comic Sans MS',serif; font-size: 14px">La aplicaci??n de la Pol??tica Nacional de Vacunaci??n es de car??cter p??blico, ajena a cualquier partido pol??tico. Queda prohibido su uso para fines distintos a los establecidos.</p>
    </div>
    <div id="raya_baja_ultima_footer"></div>
</footer>
</body>
</html>


