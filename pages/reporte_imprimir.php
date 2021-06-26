<?php
    $folio = $_GET['folio'];

    ob_start();
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte Vacunación PDF</title>
</head>
<body>
    SI JALO LA IMPRIMIRDA
    con el folio: <?php echo $folio ?>
</body>
</html>

<?php
$html = ob_get_clean();
require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('a4', 'portrait');
$dompdf->render();
$dompdf->stream("reporte_vacuna.pdf", array("Attachment" => false));
?>