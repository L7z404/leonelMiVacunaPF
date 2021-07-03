<?php
session_start();
if ($_SESSION["validado"] != "true") {
    header("Location: login.php");
    exit;
}

require_once "conn_mysql_leonel.php";

$id = $_GET['id'];

$sql = "SELECT e.id_entidad, e.id_municipio, e.entidad FROM entidades e 
    INNER JOIN municipios m on e.id_municipio = m.id_municipio WHERE e.id_entidad='$id'";
$stmt = $conn->query($sql);
$rows = $stmt->fetch();

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
    <title>Editar Entidades</title>
    <script language="JavaScript" type="text/javascript">
        function validaEntidad(){
            var entidad = document.getElementById("txtenti").value;

            if(entidad == null || entidad.length === 0 || /^\s+$/.test(entidad) || entidad.length > 55){
                alert("Debes escribir una entidad válida.");
                document.getElementById("txtenti").focus();
                return false;
            } else{
                document.entiform.submit();
            }
        }
    </script>
    <style>
        table{
            border: 5px #9E7E4F;
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
    <div id="pie_cabeza" style="color: white; text-align: center; padding: 0 0 10px 0; font-family: 'Comic Sans MS', serif; font-size: 30px">Edición de Datos de Entidades</div>
    <div id="raya_baja_cabeza"></div>
</div>
<br><br><br>

<div id="botones_abajo_index">
    <a style="text-decoration: none; color: #fff" href="regpersonas.php"><button id="bregmivac" type="button">Registros Personas</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regentidades.php"><button id="bnoconoce" type="button">✔️Entidades✔️</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="#"><button id="baviso" type="button">Municipios</button></a>
    &ensp;&ensp;
    <a style="text-decoration: none; color: #fff" href="regusuarios.php"><button id="infodosis" type="button">Usuarios</button></a>

</div>
<br><br>

<div style="text-align: center">
    <form action="actualizarenti.php" method="post" id="formenti" name="entiform">
        <table style="margin: 0 auto;" border="1">
            <thead>
            <th>ID</th>
            <th>Entidad</th>
            </thead>
                <tr>
                    <td><?php echo ($rows['id_entidad']) ?></td>
                    <input hidden type="text" id="txtid" name="txtid" value="<?php echo ($rows['id_entidad']) ?>">
                    <td><input type="text" id="txtenti" name="txtenti" placeholder="<?php echo ($rows['entidad']) ?>" /></td>
                </tr>
        </table>
        <br>
        <a style="text-decoration: none; color: #fff;" onclick="validaEntidad()"><button id="busqespe" type="button">Actualizar</button></a>
    </form>
</div>
<br><br>

<br><br><br><br>
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

