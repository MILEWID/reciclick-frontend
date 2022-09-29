<?php
require_once 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// $url = trim($_GET['url'], '/');
// $infoID = "world";
// $ruta = explode('/' , $url);
// if(isset($ruta[2])){
//     $infoID = $ruta[2];
// }

ob_start();
require_once("modules/pdf-manifiesto-unico.php");
$template = ob_get_clean();
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("",['Attachment' => false]);

?>
