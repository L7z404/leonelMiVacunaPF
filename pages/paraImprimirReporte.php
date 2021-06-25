<?php
     require_once '../dompdf/autoload.inc.php';
     use Dompdf\Dompdf;

     $html = file_get_contents("reporte_imprimir.html");
     
     $dompdf = new Dompdf();
     $dompdf->loadHtml($html);
     $dompdf->setBasePath('/../');
     $dompdf->setPaper('a4', 'portrait');
     $dompdf->render();
     $dompdf->stream("reporte_vacuna.pdf", array("Attachment" => false));
?>
