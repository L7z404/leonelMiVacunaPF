<?php

    $folio = $_POST["txtfolio"];
    $curp = $_POST["txtCurp"];

    $nombre = $_POST["txtNombre"];
    $apaterno = $_POST["txtApellidoP"];
    $amaterno = $_POST["txtApellidoM"];
    $fecNac = $_POST["txtFechaNac"];
    $entidad = $_POST["txtEntidadNac"];
    $sexo = $_POST["txtSexo"];
    $postracion = $_POST["comboPostracion"];
    $diabetes = $_POST["comboDiabetes"];
    $hiperten = $_POST["comboHiperten"];

    $entidadLugar = $_POST["comboEntidad"];
    $municipio = $_POST["comboMunicipio"];
    $codigoP = $_POST["txtCP"];
    $telefono = $_POST["txtTelefono"];
    $telefono2 = $_POST["txtTelefono2"];
    $correo = $_POST["txtCorreo"];
    $correo2 = $_POST["txtCorreo2"];
    $domDatos = $_POST["DomicilioDatos"];

    $municipioNom = $_POST["txtMunicipioNombre"];
    $entidadNom = $_POST["txtEntidadNombre"];

    $hoy = new DateTime();
    $hoystring = $hoy->format('d-m-Y');


    ob_start();
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reporte Vacunación PDF</title>
</head>
<body>
<!--    SI JALO LA IMPRIMIRDA-->
<!--    con el folio: --><?php //echo $folio ?>
<!--    y con la dfgdsgdfsg: --><?php //echo $curp ?>
    <div>
        <p>Folio mivacuna: <strong><?php echo $folio ?></strong></p>
        <p>Folio captura (opcional): <strong>N/A</strong></p>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 100.0000%;background-color: #223634;color: white">
                    <div style="text-align: center;"><strong>EXPEDIENTE DE VACUNACI&Oacute;N</strong> CONTRA EL VIRUS&nbsp;</div>
                    <div style="text-align: center;"><em>BRIGADA DE VACUNACI&Oacute;N</em></div>
                </td>
            </tr>
            </tbody>
        </table>

        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 40.6534%;"><strong>Fecha de la vacunaci&oacute;n&nbsp;</strong></td>
                <td style="width: 34.3012%;"><strong>Marca de vacuna:</strong></td>
                <td style="width: 11.9782%;"><strong>Lote</strong></td>
                <td style="width: 13.0672%;"><strong>Dosis</strong></td>
            </tr>
            <tr>
                <td style="width: 40.6534%;"><?php echo $hoystring ?></td>
                <td style="width: 34.3012%;">Vakuna Chida</td>
                <td style="width: 11.9782%;">1014</td>
                <td style="width: 13.0672%;">Última</td>
            </tr>
            </tbody>
        </table>
        <table style="width: 100%;" >
            <tbody>
            <tr>
                <td style="width: 25.0000%;"><?php echo ($nombre) ?></td>
                <td style="width: 25.0000%;"><?php echo ($apaterno) ?></td>
                <td style="width: 25.0000%;"><?php echo ($amaterno) ?></td>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>Sexo:&nbsp;</strong><?php echo $sexo ?></span></td>
            </tr>
            <tr>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>NOMBRES(S)</strong></span></td>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>APELLIDO 1</strong></span></td>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>APELLIDO 2</strong></span></td>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>Fecha Nacimiento: </strong><?php echo $fecNac ?></span><strong>&nbsp;</strong></td>
            </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 57.0188%;"><strong><span style="font-size: 12px;">CURP&nbsp;</span></strong><span style="font-size: 12px;">(Clave &uacute;nica de registro de poblaci&oacute;n)</span></td>
                <td style="width: 42.8365%;"><span style="font-size: 12px;"><strong>Telefono &oacute; celular 1</strong></span></td>
            </tr>
            <tr>
                <td style="width: 57.0188%;"><?php echo $curp ?></td>
                <td style="width: 42.8365%;"><?php echo $telefono ?></td>
            </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 57.2052%;"><span style="font-size: 12px;"><strong>Correo Electr&oacute;nico</strong></span><br></td>
                <td style="width: 42.6492%;"><strong><span style="font-size: 12px;">Telefono &oacute; celular 2</span></strong></td>
            </tr>
            <tr>
                <td style="width: 57.2052%;"><?php echo $correo ?></td>
                <td style="width: 42.6492%;"><?php echo $telefono2 ?></td>
            </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 57.1428%;"><strong><span style="font-size: 12px;">Domicilo/Datos Adicionales</span></strong></td>

                <td style="width: 14.2857%;"><strong><span style="font-size: 12px;">C.P.</span></strong></td>
                <td style="width: 14.2857%;"><span style="font-size: 12px;"><strong>Municipio</strong></span></td>
                <td style="width: 14.2857%;"><span style="font-size: 12px;"><strong>Estado</strong></span></td>
            </tr>
            <tr>
                <td style="width: 57.1428%;"><?php echo ($domDatos) ?></td>

                <td style="width: 14.2857%;"><?php echo ($codigoP) ?></td>
                <td style="width: 14.2857%;"><?php echo ($municipioNom) ?></td>
                <td style="width: 14.2857%; font-size: 11px"><?php echo ($entidadNom) ?></td>
            </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td style="width: 20.0000%; background-color: #223634; color: white"><strong><span style="font-size: 12px;">PADECIMIENTOS</span></strong></td>
                <td style="width: 20.0000%;"><span style="font-size: 12px;"><strong>Diabetes: </strong><?php echo $diabetes ?></span></td>
                <td style="width: 20.0000%;"><span style="font-size: 12px;"><strong>Hipertension: </strong><?php echo $hiperten ?></span></td>
                <td style="width: 20.0000%;"><span style="font-size: 12px;"><strong>Postración: </strong><?php echo $postracion ?></span></td>
                <td style="width: 20.0000%;"><strong><span style="font-size: 12px;">Otra (opcional): X</span></strong></td>
            </tr>
            </tbody>
        </table>
        <p><span style="font-size: 10px;">Se garantiza la protecci&oacute;n de los datos peronales en cumplimiento con la Ley General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados. Los datos personales y sensibles ser&aacute;n utilizados y vinculados para verificaci&oacute;n y confirmaci&oacute;n de la identidad dentro del marco de la planeaci&oacute;n, implementaci&oacute;n y aplicaci&oacute;n de la Politica Nacional de Vacunaci&oacute;n y dem&aacute;s politicas sociales, as&iacute; como para integrar expedientes y bases de datos necesarias para, en su caso, el otorgamiento y operacipon de politicas sociales del Gobierno Federal, as&iacute; como las obligaciones que se deriven de estos y para mantener una base hist&oacute;rica con fines estadisticos y de obligaciones relativas a la transparencia, en t&eacute;rminos de la normatividad y disposiciones aplicables. Consulte el aviso integral de privacidad en <a data-fr-linked="true" href="https://mivacuna.salud.gob.mx">https://mivacuna.salud.gob.mx</a> Lo anterior se informa en cumplimiento a los art&iacute;tulos 26,27 y 28 de la Ley General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados. La politica Nacional de Vacunaci&oacute;n es de car&aacute;cter p&uacute;blico, ajeno a cualquier partido pol&iacute;tico. Queda prohibido su uso para fines distintos a los esetablecidos.</span></p>
        <p><strong><span style="font-size: 10px;">Este formato NO es una cita para la vacunaci&oacute;n, en breve le contactaremos. La convocatoria a los puntos de vacunaci&oacute;n depende de la disponibilidad de las vacunas.</span></strong></p>
        <br>
        <hr style="border: 1px dashed;">
        <br>
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td style="width: 100.0000%;background-color: #223634;color: white">
                    <div style="text-align: center;"><strong>COMPROBANTE DE VACUNACI&Oacute;N</strong> CONTRA EL VIRUS&nbsp;</div>
                    <div style="text-align: center;"><em>PERSONA INTERESADA</em></div>
                </td>
            </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 40.4135%;"><strong>Fecha de la vacunaci&oacute;n</strong><br></td>
                <td style="width: 31.767%;"><strong>Marca de vacuna:</strong><br></td>
                <td style="width: 12.9699%;"><strong>Lote</strong><br></td>
                <td style="width: 14.8496%;"><strong>Dosis</strong><br></td>
            </tr>
            <tr>
                <td style="width: 40.4135%;"><?php echo $hoystring ?></td>
                <td style="width: 31.767%;">Vakuna Chida</td>
                <td style="width: 12.9699%;">1014</td>
                <td style="width: 14.8496%;">Última</td>
            </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td style="width: 25.0000%;"><?php echo ($nombre) ?></td>
                <td style="width: 25.0000%;"><?php echo ($apaterno) ?></td>
                <td style="width: 22.1252%;"><?php echo ($amaterno) ?></td>
                <td style="width: 27.6565%;"><span style="font-size: 10px;"><strong>Sexo: </strong><?php echo $sexo ?></span></td>
            </tr>
            <tr>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>NOMBRES(S)</strong></span><br></td>
                <td style="width: 25.0000%;"><span style="font-size: 10px;"><strong>APELLIDO 1</strong></span><br></td>
                <td style="width: 22.1252%;"><span style="font-size: 10px;"><strong>APELLIDO 2</strong></span><br></td>
                <td style="width: 27.6565%;"><span style="font-size: 10px;"><strong>Fecha Nacimiento: </strong><?php echo $fecNac ?></span><strong>&nbsp;</strong><br></td>
            </tr>
            </tbody>
        </table>
        <table style="width: 100%;" border="1">
            <tbody>
            <tr>
                <td style="width: 50.0000%;"><strong><span style="font-size: 12px;">CURP&nbsp;</span></strong><span style="font-size: 12px;">(Clave &uacute;nica de registro de poblaci&oacute;n)</span><br></td>
                <td style="width: 50.0000%;"><span style="font-size: 12px;"><strong>FOLIO DE REGISTRO MIVACUNA</strong></span></td>
            </tr>
            <tr>
                <td style="width: 50.0000%;"><?php echo $curp ?></td>
                <td style="width: 50.0000%;"><?php echo $folio ?></td>
            </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%;">
            <tbody>
            <tr>
                <td style="width: 100.0000%; background-color: #223634;color: white"><strong>INFORMACI&Oacute;N IMPORTANTE SOBRE TU VACUNA</strong></td>
            </tr>
            </tbody>
        </table>
        <p><span style="font-size: 12px;">Vigila tu salud despu&eacute;s de aplicarte la vacuna, cualquier signo o s&iacute;ntoma que presentes dentro de los 30 d&iacute;as despu&eacute;s de la vacunaci&oacute;n, favor de reportarlo de inmediato, esto nos permitir&aacute; darle la atenci&oacute;n que requieras y mantener actualizado el perfil de seguridad de las vacunas.</span></p>
        <p><span style="font-size: 12px;">Para reportar un evento adverso y encontras m&aacute;s informaci&oacute;n sobre la vacunacipon contra la COVID-19 vistia la p&aacute;gina <a data-fr-linked="true" href="https://coronavirus.gob.mx/vacunacin-covid/">https://coronavirus.gob.mx/vacunacin-covid/</a> o llama al tel&eacute;fono de la Unidad de Inteligencia Epidemiologica y Sanitaria al 800.0044.800 Para obtener m&aacute;s informaci&oacute;n sobre COVID-19 visita: vacunacovid.gob.mx</span>&nbsp;</p>
        <hr>
        <p><span style="font-size: 10px;">Se garantiza la protecci&oacute;n de los datos peronales en cumplimiento con la Ley General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados. Los datos personales y sensibles ser&aacute;n utilizados y vinculados para verificaci&oacute;n y confirmaci&oacute;n de la identidad dentro del marco de la planeaci&oacute;n, implementaci&oacute;n y aplicaci&oacute;n de la Politica Nacional de Vacunaci&oacute;n y dem&aacute;s politicas sociales, as&iacute; como para integrar expedientes y bases de datos necesarias para, en su caso, el otorgamiento y operacipon de politicas sociales del Gobierno Federal, as&iacute; como las obligaciones que se deriven de estos y para mantener una base hist&oacute;rica con fines estadisticos y de obligaciones relativas a la transparencia, en t&eacute;rminos de la normatividad y disposiciones aplicables. Consulte el aviso integral de privacidad en <a data-fr-linked="true" href="https://mivacuna.salud.gob.mx">https://mivacuna.salud.gob.mx</a> Lo anterior se informa en cumplimiento a los art&iacute;tulos 26,27 y 28 de la Ley General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados. La politica Nacional de Vacunaci&oacute;n es de car&aacute;cter p&uacute;blico, ajeno a cualquier partido pol&iacute;tico. Queda prohibido su uso para fines distintos a los esetablecidos.</span></p>
        <p><strong><span style="font-size: 10px;">Este formato NO es una cita para la vacunaci&oacute;n, en breve le contactaremos. La convocatoria a los puntos de vacunaci&oacute;n depende de la disponibilidad de las vacunas.</span></strong></p>
    </div>
</body>
</html>

<?php
$html = ob_get_clean();
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('b4', 'portrait');
$dompdf->render();
$dompdf->stream("reporte_vacuna.pdf", array("Attachment" => false));
?>