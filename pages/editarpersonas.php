<?php

    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: login.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $id = $_GET['id'];

    $sql = "SELECT d.id, d.nombre, d.apaterno, d.amaterno, d.curp, d.fecNac, d.sexo, d.postracion, 
           d.diabetes, d.hipertension, d.cp, d.telefono, d.telefono2, d.email, d.emailap, d.dom_datos, 
           d.folio, e.entidad, m.municipio FROM datos_persona d INNER JOIN entidades e ON d.id_entidad = e.id_entidad 
               INNER JOIN municipios m ON d.id_municipio = m.id WHERE d.id='$id'";

    $stmt = $conn->query($sql);
    $row = $stmt->fetch();

    $sqle = 'SELECT * FROM entidades';
    $stmte = $conn->query($sqle);
    $rowse = $stmte->fetchAll();

    $sql2 = 'SELECT * FROM municipios';
    $stmts = $conn->query($sql2);
    $rowe = $stmts->fetchAll();
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
    <title>Editar Personas</title>
    <script language="JavaScript" type="text/javascript">
        function create_object_XMLHttpRequest() {
            try {
                objeto = new XMLHttpRequest();
            } catch (err1) {
                try {
                    objeto = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (err2) {
                    try {
                        objeto = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (err3) {
                        objeto = false;
                    }
                }
            }
            return objeto;
        }

        var objeto_AJAX = create_object_XMLHttpRequest();

        function getMuni() {
            var URL = "getMunicipios.php";
            objeto_AJAX.open("POST", URL, true);
            objeto_AJAX.onreadystatechange = muestraResultado;
            objeto_AJAX.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            objeto_AJAX.send("municipio_selected=" + document.getElementById("comboEntidad").value);
        }

        function muestraResultado() {
            if (objeto_AJAX.readyState == 4 && objeto_AJAX.status == 200) {
                document.getElementById("comboMunicipio").innerHTML = objeto_AJAX.responseText;
            }
        }
    </script>
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
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Edición de Datos de Personas</div>
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
<br><br>
<div style="text-align: center"><a style="text-decoration: none; color: #fff;" href="busquedaespe.php"><button id="busqespe" type="button">Busqueda Especifica por Entidad y Municipios</button></a></div>
<br>
<div style="text-align: center">
    <table style="margin: 0 auto;" border="1">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido1</th>
        <th>Apellido2</th>
        <th>______CURP______</th>
        <th>______FechaNacimiento______ Actual: <?php
            $fechaNac = $row['fecNac'];
            $fechaNacFormat = date("d-m-Y", strtotime($fechaNac));
            echo ($fechaNacFormat)
            ?></th>
        <th>Sexo</th>
        <th>Postración</th>
        <th>Diabetes</th>
        <th>Hiptertension</th>

        <th>___CP___</th>
        <th>_Telefono_</th>
        <th>_Telefono2_</th>
        <th>________Correo________</th>
        <th>______CorreoApoyo______</th>
        <th>Datos/Domicilio</th>
        <th>Entidad de vacunación</th>
        <th>____MunicipioVacunación____ Actual: <?php echo ($row['municipio']) ?></th>
        </thead>
            <tr>
                <td><?php echo ($row['id']) ?></td>
                <input hidden type="text" id="txtid" name="txtid" value="<?php echo ($row['id']) ?>" />
                <td><input type="text" id="txtnombre" name="txtnombre" placeholder="<?php echo ($row['nombre']) ?>" /></td>
                <td><input type="text" id="txtapaterno" name="txtapaterno" placeholder="<?php echo ($row['apaterno']) ?>" /></td>
                <td><input type="text" id="txtamaterno" name="txtamaterno" placeholder="<?php echo ($row['amaterno']) ?>" /></td>
                <td><input type="text" id="txtcurp" name="txtcurp" placeholder="<?php echo ($row['curp']) ?>" value="<?php echo ($row['curp']) ?>"  /></td>

                <td><input type="date" id="txtfecnac" name="txtfecnac" /></td>
                <td><select id="txtSexo" name="txtSexo">
                        <option selected disabled><?php echo ($row['sexo']) ?></option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                        <option>Otro</option>
                    </select></td>
                <td><select id="comboPostracion" name="comboPostracion">
                        <option selected disabled><?php echo ($row['postracion']) ?></option>
                        <option>Si</option>
                        <option>No</option>
                    </select></td>
                <td><select id="comboDiabetes" name="comboDiabetes" >
                        <option selected disabled><?php echo ($row['diabetes']) ?></option>
                        <option>Si</option>
                        <option>No</option>
                    </select></td>
                <td><select id="comboHiperten" name="comboHiperten">
                        <option selected disabled><?php echo ($row['hipertension']) ?></option>
                        <option>Si</option>
                        <option>No</option>
                    </select></td>

                <td><input type="number" id="txtcp" name="txtcp" placeholder="<?php echo ($row['cp']) ?>" /></td>
                <td><input type="text" id="txttelefono" name="txttelefono" placeholder="<?php echo ($row['telefono'])  ?>" /></td>
                <td><input type="text" id="txttelefono2" name="txttelefono2" placeholder="<?php echo ($row['telefono2']) ?>" /></td>
                <td><input type="email" id="txtcorreo" id="txtcorreo" placeholder="<?php echo ($row['email'])   ?>" /></td>
                <td><input type="email" id="txtcorreo2" id="txtcorreo2" placeholder="<?php echo ($row['emailap']) ?>" /></td>
                <td><textarea placeholder="<?php echo ($row['dom_datos']) ?>"></textarea> </td>
                <td><select id="comboEntidad" name="comboEntidad" onchange="javascript:getMuni();">
                        <option selected disabled><?php echo ($row['entidad']) ?></option>
                        <?php
                        foreach ($rowse as $row) {
                            echo '<option value="' .
                                $row['id_entidad'] . '">' .
                                $row['entidad'] . '</option>';
                        }
                        ?>
                    </select></td>
                <td><select id="comboMunicipio" name="comboMunicipio">
                    </select></td>
            </tr>
    </table>
    <br>
    <a style="text-decoration: none; color: #fff;" onclick="validaPersona()"><button id="busqespe" type="button">Actualizar</button></a>
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
