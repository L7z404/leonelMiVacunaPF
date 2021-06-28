<?php
    session_start();
    if ($_SESSION["validado"]!="true"){
        header("Location: ../index.php");
        exit;
    }

    require_once "conn_mysql_leonel.php";

    $sql = 'SELECT * FROM entidades';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();

    $sql2 = 'SELECT * FROM municipios';
    $stmts = $conn->query($sql2);
    $rowe = $stmts->fetchAll();

    $infocurp = $_POST["curp_input"];
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
    <link rel="stylesheet" href="../css/vac_style2.css" type="text/css">
    <script src="../javascript/validaciones.js"></script>

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

    <script type="text/javascript">
        function ActivarCampo(){
            var contenedor = document.getElementById("LugarDatos");
            contenedor.style.display = "block";
            return true;
        }
    </script>

    <title>Mi Vacuna - Confirmación CURP</title>
</head>
<body>
    <div id="all_cabeza">
        <div id="raya_alta_cabeza"></div>
        <div id="centro_cabeza">
            <div id="imgDiv"></div>
        </div>
        <div id="pie_cabeza"></div>
        <div id="raya_baja_cabeza"></div>
    </div>
    <br><br><br>
    <div id="botones_abajo_index" >
        <button id="bregmivac" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/registro_vacuna_imgns_c6.pdf" target="_blank">Guía Para Registrarse en mivacuna</a></button>
        &ensp;&ensp;
        <button id="bnoconoce" type="button"><a style="text-decoration: none; color: #fff" href="https://www.gob.mx/curp/" target="_blank">¿No conoces tu CURP...? Consúltala aquí</a></button>
        &ensp;&ensp;
        <button id="baviso" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/aviso_de_privacidad_integral.pdf" target="_blank">Aviso de Privacidad</a></button>
        &ensp;&ensp;
        <button id="infodosis" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/info_segunda_dosis.pdf" target="_blank">Información segunda dosis</a></button>

    </div>
    <br><br><br>

    <form method="post" id="confCenterForm" name="confCurpForm" action="registroFolio.php">
        <div id="configCurp">
            <div id="info_a_curp">Confirmación de CURP</div>

            <div id="datosPersonaCurp">

                <div id="espacioDatos" style="margin-top: 1em"></div>
                <label for="txtNombre"><strong>Nombre:</strong>
                    <input type="text" id="txtNombre" placeholder="Primer Nombre" style="width: 15%" />
                </label>

                <label for="txtApellidoP"><strong>Apellido Paterno:</strong>
                    <input type="text" id="txtApellidoP" placeholder="Apellido Paterno" style="width: 15%" />
                </label>

                <label for="txtApellidoM"><strong>Apellido Materno:</strong>
                    <input type="text" id="txtApellidoM" placeholder="Apellido Materno" style="width: 15%" />
                </label>

                <br>
                <label for="txtCurp"><strong>CURP:</strong>
                    <input type="text" id="txtCurp" name="txtCurp" style="width: 20%; background-color: #d4d3d3" value="<?php echo strtoupper($infocurp) ?>" />
                </label>
                &ensp; &ensp; &ensp; &ensp;
                <label for="txtFechaNac"><strong>Fecha Nacimiento:</strong>
                    <input type="date" id="txtFechaNac" style="width: 15%" />
                </label>

                <br>

                <label for="txtEntidadNac"><strong>Entidad Nacimiento:</strong></label>
                <select id="txtEntidadNac" name="txtEntidadNac">
                    <option value="0" selected disabled>--</option>
                    <?php
                    foreach ($rows as $row) {
                        echo '<option value="' .
                            $row['id_entidad'] . '">' .
                            $row['entidad'] . '</option>';
                    }
                    ?>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="txtSexo"><i>Sexo:</i></label>
                <select id="txtSexo" name="txtSexo">
                    <option selected disabled>--</option>
                    <option>Hombre</option>
                    <option>Mujer</option>
                    <option>Otro</option>
                </select>

                <br><br>
                <label for="comboPostracion"><i>¿Se encuentra en estado de postración?</i></label>
                <select id="comboPostracion" name="comboPostracion">
                    <option selected disabled>--</option>
                    <option>Sí</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboDiabetes"><i>¿Padece diabetes?</i></label>
                <select id="comboDiabetes" name="comboDiabetes" >
                    <option selected disabled>--</option>
                    <option>Sí</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboHiperten"><i>¿Padece hipertensión?</i></label>
                <select id="comboHiperten" name="comboHiperten">
                    <option selected disabled>--</option>
                    <option>Sí</option>
                    <option>No</option>
                </select>
            </div>
            <br>
            <div id="textoConfigCurp" >
                <p>Se garantiza la protección de los datos personales en cumplimiento con la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados. Los datos personales y sensibles serán utilizados y vinculados para verificación y confirmación de la identidad dentro del marco de la planeación, implementación y aplicación de la Política Nacional de Vacunación y demás políticas sociales, así como para integrar expedientes y bases de datos necesarias para, en su caso, el otorgamiento y operación de políticas sociales del Gobierno Federal, así como las obligaciones que se deriven de estos y para mantener una base histórica con fines estadísticos y de obligaciones relativas a la transparencia, en términos de la normatividad y disposiciones aplicables. Consulte el aviso integral de privacidad en https://mivacuna.salud.gob.mx Lo anterior se informa en cumplimiento a los artículos 26, 27 y 28 de la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados. La Política Nacional de Vacunación es de carácter público, ajeno a cualquier partido político. Queda prohibido su uso para fines distintos a los establecidos.</p>
            </div>
            <div id="botonesConfigCurp">
                <button id="botonVacu" type="button" onclick="ActivarCampo();"><strong>Quiero Vacunarme</strong></button>
                <br><br>
                <button id="botonRegresar" type="button" onclick="window.location.href='inicio.php'"><strong>Regresar</strong></button>
            </div>
            <div id="espacioDatos" style="margin-bottom: 2em"></div>
        </div>

        <div id="LugarDatos" style="display:none;">
            <div id="info_a_curp">Lugar en donde voy a vacunarme y datos para localizarme</div>
            <br>
            <label for="comboEntidad"><i>Entidad:</i></label>
            <select id="comboEntidad" onchange="javascript:getMuni();">
                <option selected disabled>--</option>
                <?php
                foreach ($rows as $row) {
                    echo '<option value="' .
                        $row['id_entidad'] . '">' .
                        $row['entidad'] . '</option>';
                }
                ?>
            </select>
            &ensp; &ensp; &ensp; &ensp;
            <label for="comboMunicipio"><i>Municipio:</i></label>
            <select id="comboMunicipio">

            </select>
            &ensp; &ensp; &ensp; &ensp;
            <label for="txtCP"><strong>Código Postal:</strong>
                <input type="number" id="txtCP" placeholder="ej. 48640, 47760..." style="width: 15%" />
            </label>
            <br>

            <label for="txtTelefono"><strong>Telefono(1):</strong>
                <input type="text" id="txtTelefono" placeholder="ej. 3751042118" style="width: 10%" />
            </label>

            <label for="txtTelefono2"><strong>Telefono(2):</strong>
                <input type="text" id="txtTelefono2" placeholder="ej. 4862153229" style="width: 10%" />
            </label>

            <label for="txtCorreo"><strong>Email:</strong>
                <input type="email" id="txtCorreo" placeholder="test@test.com" style="width: 15%" />
            </label>

            <label for="txtCorreo2"><strong>Email Apoyo:</strong>
                <input type="email" id="txtCorreo2" placeholder="test@test.com" style="width: 15%" />
            </label>

            <br>
            <label for="DomicilioDatos"><strong>Domicilio completo o datos de contacto:</strong><br>
                <textarea id="DomicilioDatos" name="DomicilioDatos" style="width: 70%"></textarea>
            </label>

            <br><br>
            <div id="botonesConfigCurp">
                <button id="botonVacu" type="button" onclick="return validaConfCurp();"><strong>Enviar</strong></button>
            </div>
            <br><br>
        </div>
    </form>

</body>
    <footer>
        <br><br>
    <div id="texto_abajo_footer">
        <p style="text-align: center; color: grey; font-family: 'Comic Sans MS',serif; font-size: 14px">La aplicación de la Política Nacional de Vacunación es de carácter público, ajena a cualquier partido político. Queda prohibido su uso para fines distintos a los establecidos.</p>
    </div>
    <div id="raya_baja_ultima_footer"></div>
</footer>
</html>