<?php
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
    <form id="confCenterForm" name="confCurpForm">
        <div id="configCurp">
            <div id="info_a_curp">Confirmación de CURP</div>

            <div id="datosPersonaCurp">

                <div id="espacioDatos" style="margin-top: 1em"></div>
                <label for="txtNombre"><strong>Nombre:</strong>
                    <input id="txtNombre" placeholder="Primer Nombre" style="width: 15%" />
                </label>

                <label for="txtApellidoP"><strong>Apellido Paterno:</strong>
                    <input id="txtApellidoP" placeholder="Apellido Paterno" style="width: 15%" />
                </label>

                <label for="txtApellidoM"><strong>Apellido Materno:</strong>
                    <input id="txtApellidoM" placeholder="Apellido Materno" style="width: 15%" />
                </label>

                <br>
                <label for="txtCurp"><strong>CURP:</strong>
                    <input id="txtCurp" placeholder="CURP" style="width: 15%" />
                </label>
                <label for="txtFechaNac"><strong>Fecha Nacimiento:</strong>
                    <input id="txtFechaNac" placeholder="xx/xx/xxxx" style="width: 15%" />
                </label>
                <label for="txtEntidadNac"><strong>Entidad Nacimiento:</strong>
                    <input id="txtEntidadNac" placeholder="Entidad Nacimiento" style="width: 15%" />
                </label>
                <label for="txtSexo"><strong>Sexo:</strong>
                    <input id="txtSexo" placeholder="Sexo" style="width: 15%" />
                </label>

                <br><br>
                <label for="comboPostracion"><i>¿Se encuentra en estado de postración?</i></label>
                <select id="comboPostracion">
                    <option selected disabled>--</option>
                    <option>Sí</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboDiabetes"><i>¿Padece diabetes?</i></label>
                <select id="comboDiabetes">
                    <option selected disabled>--</option>
                    <option>Sí</option>
                    <option>No</option>
                </select>
                &ensp; &ensp; &ensp; &ensp;
                <label for="comboHiperten"><i>¿Padece hipertensión?</i></label>
                <select id="comboHiperten">
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
                <button id="botonVacu" type="button" onclick=""><strong>Quiero Vacunarme</strong></button>
                <br><br>
                <button id="botonRegresar" type="button" onclick="window.location.href='../index.php'"><strong>Regresar</strong></button>
            </div>
            <div id="espacioDatos" style="margin-bottom: 1em"></div>
        </div>
    </form>

</body>
</html>