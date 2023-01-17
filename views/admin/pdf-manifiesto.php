<?php
// reference the Dompdf namespace
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

// $url = trim($_GET["url"],'/');
// $url = explode('/',$url)[2];

ob_start();
require_once("modules/pdf-manifiesto-unico.php");

$template = ob_get_clean();

echo $template;
// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// $dompdf->loadHtml($template);

// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A3', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream("",['Attachment' => false]);