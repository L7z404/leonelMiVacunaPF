<?php
session_start();
if ($_SESSION["validado"]!="true"){
    header("Location: login.php");
    exit;
}

require_once "conn_mysql_leonel.php";

$sql = 'SELECT * FROM entidades';
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
    <title>Busqueda Especifica</title>
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

    <script language="JavaScript" type="text/javascript">

        function mostrarEnti(str) {
            if (str === 0) {
                document.getElementById("datosPer").innerHTML = "";
                return false;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("datosPer").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","getPersonas.php?q="+str,true);
                xmlhttp.send();
            }
        }

    </script>
</head>
<body>
<div id="all_cabeza">
    <div id="raya_alta_cabeza"></div>
    <div id="centro_cabeza">
        <div id="imgDiv"></div>
    </div>
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Administración de Datos de Usuarios</div>
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
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">Usuarios</button></a>

</div>
<br><br>
<div style="text-align: center"><a style="text-decoration: none; color: #fff;" href="#"><button id="busqespe" type="button">✔️Busqueda Especifica por Entidad y Municipios✔️</button></a></div>
<br><br>

<div style="text-align: center">

    <label for="comboEntidad"><i>Entidad:</i></label>
    <select id="comboEntidad" name="comboEntidad" onchange="javascript:getMuni();">
        <option selected disabled>---Selecciona una Entidad---</option>
        <?php
        foreach ($rows as $row) {
            echo '<option value="' .
                $row['id_entidad'] . '">' .
                $row['entidad'] . '</option>';
        }
        ?>
    </select>
    &ensp;&ensp;&ensp;&ensp;
    <label for="comboMunicipio"><i>Municipio:</i></label>
    <select id="comboMunicipio" name="comboMunicipio" onChange="mostrarEnti(this.value);"></select>
</div>
<br><br>
<div id="datosPer">
</div>
<br><br><br><br><br><br>

</body>
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
</html>
