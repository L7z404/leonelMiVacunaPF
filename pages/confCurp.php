<?php
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

    <title>Mi Vacuna - Confirmaci??n CURP</title>
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
        <button id="bregmivac" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/registro_vacuna_imgns_c6.pdf" target="_blank">Gu??a Para Registrarse en mivacuna</a></button>
        &ensp;&ensp;
        <button id="bnoconoce" type="button"><a style="text-decoration: none; color: #fff" href="https://www.gob.mx/curp/" target="_blank">??No conoces tu CURP...? Cons??ltala aqu??</a></button>
        &ensp;&ensp;
        <button id="baviso" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/aviso_de_privacidad_integral.pdf" target="_blank">Aviso de Privacidad</a></button>
        &ensp;&ensp;
        <button id="infodosis" type="button"><a style="text-decoration: none; color: #fff" href="https://mivacuna.salud.gob.mx/pdf/info_segunda_dosis.pdf" target="_blank">Informaci??n segunda dosis</a></button>

    </div>
    <br><br><br>

    <form method="post" id="confCenterForm" name="confCurpForm" action="registroFolio.php">
        <div id="configCurp">
            <div id="info_a_curp">Confirmaci??n de CURP</div>

            <div id="datosPersonaCurp">

                <div id="espacioDatos" style="margin-top: 1em"></div>
                <label for="txtNombre"><strong>Nombre:</strong>
                    <input type="text" id="txtNombre" name="txtNombre" placeholder="Primer Nombre" style="width: 15%" />
                </label>

                <label for="txtApellidoP"><strong>Apellido Paterno:</strong>
                    <input type="text" id="txtApellidoP" name="txtApellidoP" placeholder="Apellido Paterno" style="width: 15%" />
                </label>

                <label for="txtApellidoM"><strong>Apellido Materno:</strong>
                    <input type="text" id="txtApellidoM" name="txtApellidoM" placeholder="Apellido Materno" style="width: 15%" />
                </label>

                <br>
                <label for="txtCurp"><strong>CURP:</strong>
                    <input type="text" id="txtCurp" name="txtCurp" style="width: 20%; background-color: #d4d3d3" value="<?php echo strtoupper($infocurp) ?>" />
                </label>
                &ensp; &ensp; &ensp; &ensp;
                <label for="txtFechaNac"><strong>Fecha Nacimiento:</strong>
                    <input type="date" id="txtFechaNac" name="txtFechaNac" style="width: 15%" />
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
                <label for="comboPostracion"><i>??Se encuentra en estado de postraci??n?</i></label>
                <select id="comboPostracion" name="comboPostracion">
                    <option selected disabled>--</option>
                    <option>Si</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboDiabetes"><i>??Padece diabetes?</i></label>
                <select id="comboDiabetes" name="comboDiabetes" >
                    <option selected disabled>--</option>
                    <option>Si</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboHiperten"><i>??Padece hipertensi??n?</i></label>
                <select id="comboHiperten" name="comboHiperten">
                    <option selected disabled>--</option>
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>
            <br>
            <div id="textoConfigCurp" >
                <p>Se garantiza la protecci??n de los datos personales en cumplimiento con la Ley General de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados. Los datos personales y sensibles ser??n utilizados y vinculados para verificaci??n y confirmaci??n de la identidad dentro del marco de la planeaci??n, implementaci??n y aplicaci??n de la Pol??tica Nacional de Vacunaci??n y dem??s pol??ticas sociales, as?? como para integrar expedientes y bases de datos necesarias para, en su caso, el otorgamiento y operaci??n de pol??ticas sociales del Gobierno Federal, as?? como las obligaciones que se deriven de estos y para mantener una base hist??rica con fines estad??sticos y de obligaciones relativas a la transparencia, en t??rminos de la normatividad y disposiciones aplicables. Consulte el aviso integral de privacidad en https://mivacuna.salud.gob.mx Lo anterior se informa en cumplimiento a los art??culos 26, 27 y 28 de la Ley General de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados. La Pol??tica Nacional de Vacunaci??n es de car??cter p??blico, ajeno a cualquier partido pol??tico. Queda prohibido su uso para fines distintos a los establecidos.</p>
            </div>
            <div id="botonesConfigCurp">
                <button id="botonVacu" type="button" onclick="ActivarCampo();"><strong>Quiero Vacunarme</strong></button>
                <br><br>
                <button id="botonRegresar" type="button" onclick="window.location.href='../index.php'"><strong>Regresar</strong></button>
            </div>
            <div id="espacioDatos" style="margin-bottom: 2em"></div>
        </div>

        <div id="LugarDatos" style="display:none;">
            <div id="info_a_curp">Lugar en donde voy a vacunarme y datos para localizarme</div>
            <br>
            <label for="comboEntidad"><i>Entidad:</i></label>
            <select id="comboEntidad" name="comboEntidad" onchange="javascript:getMuni();">
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
            <select id="comboMunicipio" name="comboMunicipio">

            </select>
            &ensp; &ensp; &ensp; &ensp;
            <label for="txtCP"><strong>C??digo Postal:</strong>
                <input type="number" id="txtCP" name="txtCP" placeholder="ej. 48640, 47760..." style="width: 15%" />
            </label>
            <br>

            <label for="txtTelefono"><strong>Telefono(1):</strong>
                <input type="text" id="txtTelefono" name="txtTelefono" placeholder="ej. 3751042118" style="width: 10%" />
            </label>

            <label for="txtTelefono2"><strong>Telefono(2):</strong>
                <input type="text" id="txtTelefono2" name="txtTelefono2" placeholder="ej. 4862153229" style="width: 10%" />
            </label>

            <label for="txtCorreo"><strong>Email:</strong>
                <input type="email" id="txtCorreo" name="txtCorreo" placeholder="test@test.com" style="width: 15%" />
            </label>

            <label for="txtCorreo2"><strong>Email Apoyo:</strong>
                <input type="email" id="txtCorreo2" name="txtCorreo2" placeholder="test@test.com" style="width: 15%" />
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
        <p style="text-align: center; color: grey; font-family: 'Comic Sans MS',serif; font-size: 14px">La aplicaci??n de la Pol??tica Nacional de Vacunaci??n es de car??cter p??blico, ajena a cualquier partido pol??tico. Queda prohibido su uso para fines distintos a los establecidos.</p>
    </div>
    <div id="raya_baja_ultima_footer"></div>
</footer>
</html>