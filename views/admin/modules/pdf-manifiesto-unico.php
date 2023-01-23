<?php
$id_manifiesto = $_GET['manifiesto'] ?? "-1";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => URL_API_M3 . '/obtener-manifiesto/id/' . $id_manifiesto,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array('Authorization: Bearer ' . $_SESSION['userLoggedToken']),
));

$response = curl_exec($curl);
curl_close($curl);
$query = json_decode($response);

if (isset($query->status) && $query->status == 404) {
    echo "<h1>{$query->message}</h1>";
    die;
}



$manifiesto = $query ?? "";
$numRegistro = $manifiesto->Manifiesto_Productor->n_registro ?? "";
$licAmbiental = $manifiesto->empresa_productor[0]->Usuario->licencia_ambiental ?? "" ;
var_dump($manifiesto);
$numManifiesto = $manifiesto->id_manifiesto ?? "";
$pagina = $manifiesto->Manifiesto_Productor->pagina ?? "";
$nombreEmpresaGeneradora = $manifiesto->empresa_productor[0]->Usuario->nombre ?? "" ;
$ruc = $manifiesto->empresa_productor[0]->ruc ?? "" ;
$nombreInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->nombre_instalacion ?? "";
$domicilioInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->domicilio ?? "";
$provinciaInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->provincia?? "";
$cantonInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->canton ?? "";
$parroquiaInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->parroquia ?? "";
$nOnuInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->n_onu ?? "";
$telefonoInstalacion =    $manifiesto->Manifiesto_Productor->Instalacione->telefono ?? "";
$aee =    $manifiesto->Manifiesto_Productor->Aees ?? [];
$informacionManifiestoProductor = $manifiesto->Manifiesto_Productor ?? "";
$informacionEmpresaTransportista = $manifiesto->empresa_transportista ?? "";
$manifiestoTransportista = $manifiesto->Manifiesto_Transportistum ?? "";
$datosTransportista = $manifiesto->usuario_transportista[0] ?? "";
$datosEmpresaDestinataria = $manifiesto->empresa_destinatario[0] ?? "";
$datosEmpresaDestinatariaAlterna = $manifiesto->destinatario_alterno[0] ?? "";
$manifiestoDestinatario = $manifiesto->Manifiesto_Destinatario ?? "";
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="vero valle" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      th.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      td.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      td.style5 { vertical-align:middle; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style5 { vertical-align:middle; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style6 { vertical-align:bottom; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:bottom; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style7 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style10 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style12 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style13 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style13 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style15 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style15 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style16 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style16 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style17 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style18 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style18 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style19 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style19 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style20 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style20 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style21 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style21 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:14pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:14pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Lucida Bright'; font-size:12pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Lucida Bright'; font-size:12pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      td.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:5pt; background-color:white }
      th.style28 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:5pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style35 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style35 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style36 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style37 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style37 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style38 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style46 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style46 { vertical-align:middle; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:white }
      th.style51 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:7pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:2px solid #333333 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:2px solid #333333 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style64 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style65 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:2px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style70 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style70 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style71 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style71 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style72 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style72 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style73 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style73 { vertical-align:top; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style74 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style74 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style77 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style77 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style79 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style79 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #000000 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style80 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#006100; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      th.style80 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#006100; font-family:'Calibri'; font-size:11pt; background-color:#FFFFFF }
      td.style81 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style81 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style82 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style82 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style84 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style84 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style85 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style85 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style86 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style86 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style87 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style87 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style88 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style88 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style89 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style89 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style90 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style90 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style91 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style91 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style92 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:justify; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style93 { vertical-align:middle; text-align:justify; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style94 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style94 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style95 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style95 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style96 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style96 { vertical-align:middle; text-align:justify; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      td.style99 { vertical-align:middle; text-align:right; padding-right:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style99 { vertical-align:middle; text-align:right; padding-right:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style100 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style101 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style101 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style102 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style104 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style104 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:2px solid #333333 !important; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style105 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:2px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style105 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:2px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style106 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style106 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style107 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style107 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style108 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style108 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style109 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style109 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style110 { vertical-align:top; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style110 { vertical-align:top; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style111 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style111 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style112 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style112 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style113 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style113 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style114 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style114 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style115 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style115 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style116 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style116 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style117 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:5pt; background-color:white }
      th.style117 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:5pt; background-color:white }
      td.style118 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      th.style118 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      td.style119 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      th.style119 { vertical-align:middle; text-align:justify; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:6pt; background-color:white }
      td.style120 { vertical-align:bottom; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style120 { vertical-align:bottom; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #333333 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style121 { vertical-align:bottom; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style121 { vertical-align:bottom; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:1px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style122 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style122 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style123 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style123 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style124 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style124 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style125 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style125 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style126 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      th.style126 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:1pt; background-color:white }
      td.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style127 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style128 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style128 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style129 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style129 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style130 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style130 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style131 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style131 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:2px solid #333333 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style132 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style132 { vertical-align:middle; text-align:center; border-bottom:1px solid #333333 !important; border-top:1px solid #333333 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style133 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style133 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      table.sheet0 col.col0 { width:16.26666648pt }
      table.sheet0 col.col1 { width:16.26666648pt }
      table.sheet0 col.col2 { width:16.26666648pt }
      table.sheet0 col.col3 { width:16.26666648pt }
      table.sheet0 col.col4 { width:16.26666648pt }
      table.sheet0 col.col5 { width:16.26666648pt }
      table.sheet0 col.col6 { width:16.26666648pt }
      table.sheet0 col.col7 { width:16.26666648pt }
      table.sheet0 col.col8 { width:16.26666648pt }
      table.sheet0 col.col9 { width:16.26666648pt }
      table.sheet0 col.col10 { width:16.26666648pt }
      table.sheet0 col.col11 { width:16.26666648pt }
      table.sheet0 col.col12 { width:16.26666648pt }
      table.sheet0 col.col13 { width:16.26666648pt }
      table.sheet0 col.col14 { width:16.26666648pt }
      table.sheet0 col.col15 { width:16.26666648pt }
      table.sheet0 col.col16 { width:16.26666648pt }
      table.sheet0 col.col17 { width:16.26666648pt }
      table.sheet0 col.col18 { width:16.26666648pt }
      table.sheet0 col.col19 { width:16.26666648pt }
      table.sheet0 col.col20 { width:16.26666648pt }
      table.sheet0 col.col21 { width:16.26666648pt }
      table.sheet0 col.col22 { width:16.26666648pt }
      table.sheet0 col.col23 { width:16.26666648pt }
      table.sheet0 col.col24 { width:16.26666648pt }
      table.sheet0 col.col25 { width:16.26666648pt }
      table.sheet0 col.col26 { width:16.26666648pt }
      table.sheet0 col.col27 { width:16.26666648pt }
      table.sheet0 col.col28 { width:16.26666648pt }
      table.sheet0 col.col29 { width:16.26666648pt }
      table.sheet0 col.col30 { width:16.26666648pt }
      table.sheet0 col.col31 { width:16.26666648pt }
      table.sheet0 col.col32 { width:16.26666648pt }
      table.sheet0 col.col33 { width:54.2222216pt }
      table.sheet0 col.col34 { width:42pt }
      table.sheet0 col.col35 { width:42pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:12.9pt }
      table.sheet0 tr.row1 { height:12.9pt }
      table.sheet0 tr.row2 { height:16.5pt }
      table.sheet0 tr.row3 { height:15pt }
      table.sheet0 tr.row4 { height:29.85pt }
      table.sheet0 tr.row5 { height:15.75pt }
      table.sheet0 tr.row6 { height:15pt }
      table.sheet0 tr.row7 { height:15pt }
      table.sheet0 tr.row8 { height:15pt }
      table.sheet0 tr.row9 { height:15pt }
      table.sheet0 tr.row10 { height:15pt }
      table.sheet0 tr.row11 { height:15pt }
      table.sheet0 tr.row12 { height:31.5pt }
      table.sheet0 tr.row13 { height:15.75pt }
      table.sheet0 tr.row14 { height:15pt }
      table.sheet0 tr.row15 { height:6.75pt }
      table.sheet0 tr.row16 { height:19.35pt }
      table.sheet0 tr.row17 { height:15pt }
      table.sheet0 tr.row18 { height:15pt }
      table.sheet0 tr.row19 { height:15pt }
      table.sheet0 tr.row20 { height:15pt }
      table.sheet0 tr.row21 { height:15.75pt }
      table.sheet0 tr.row22 { height:15.75pt }
      table.sheet0 tr.row23 { height:15pt }
      table.sheet0 tr.row24 { height:15pt }
      table.sheet0 tr.row25 { height:29.25pt }
      table.sheet0 tr.row26 { height:32.25pt }
      table.sheet0 tr.row27 { height:28.5pt }
      table.sheet0 tr.row28 { height:30pt }
      table.sheet0 tr.row29 { height:15pt }
      table.sheet0 tr.row30 { height:15.75pt }
      table.sheet0 tr.row31 { height:15pt }
      table.sheet0 tr.row32 { height:15.75pt }
      table.sheet0 tr.row33 { height:15pt }
      table.sheet0 tr.row34 { height:15pt }
      table.sheet0 tr.row35 { height:15.75pt }
      table.sheet0 tr.row36 { height:15pt }
      table.sheet0 tr.row37 { height:15pt }
      table.sheet0 tr.row38 { height:15.75pt }
      table.sheet0 tr.row39 { height:15pt }
      table.sheet0 tr.row40 { height:15.75pt }
      table.sheet0 tr.row41 { height:32.25pt }
      table.sheet0 tr.row42 { height:16.5pt }
      table.sheet0 tr.row43 { height:15.75pt }
      table.sheet0 tr.row44 { height:15.75pt }
      table.sheet0 tr.row45 { height:15.75pt }
      table.sheet0 tr.row46 { height:15pt }
      table.sheet0 tr.row47 { height:6pt }
      table.sheet0 tr.row48 { height:14.85pt }
      table.sheet0 tr.row49 { height:15pt }
      table.sheet0 tr.row50 { height:15pt }
      table.sheet0 tr.row51 { height:15.75pt }
      table.sheet0 tr.row52 { height:15pt }
      table.sheet0 tr.row53 { height:15pt }
      table.sheet0 tr.row54 { height:29.25pt }
      table.sheet0 tr.row55 { height:15pt }
      table.sheet0 tr.row56 { height:29.25pt }
      table.sheet0 tr.row57 { height:15pt }
      table.sheet0 tr.row58 { height:15pt }
      table.sheet0 tr.row59 { height:15pt }
      table.sheet0 tr.row60 { height:15.75pt }
      table.sheet0 tr.row61 { height:15pt }
      table.sheet0 tr.row62 { height:9pt }
      table.sheet0 tr.row63 { height:15pt }
      table.sheet0 tr.row64 { height:15pt }
      table.sheet0 tr.row65 { height:23.85pt }
      table.sheet0 tr.row66 { height:24.9pt }
      table.sheet0 tr.row67 { height:34.35pt }
      table.sheet0 tr.row68 { height:24.9pt }
      table.sheet0 tr.row69 { height:24.9pt }
      table.sheet0 tr.row70 { height:23.85pt }
      table.sheet0 tr.row71 { height:15pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <col class="col31">
        <col class="col32">
        <col class="col33">
        <col class="col34">
        <col class="col35">
        <tbody>
          <tr class="row0">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column0 style1 null">
<div style="position: relative;"><img style="position: absolute; z-index: 1; left: 9px; top: 5px; width: 184px; height: 72px;"    src="<?php echo URL_BASE_APP; ?>admin/logoMae.jpg"   border="0" /></div></td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9 style22 null style22" colspan="20"></td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18 style23 null style23" colspan="9"></td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29 style24 null style24" colspan="4"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0 style25 s style25" colspan="33">&nbsp;MANIFIESTO ÚNICO DE ENTREGA, TRANSPORTE Y RECEPCIÓN <br />
DE DESECHOS ESPECIALES</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
            <td class="column11">&nbsp;</td>
            <td class="column12">&nbsp;</td>
            <td class="column13">&nbsp;</td>
            <td class="column14">&nbsp;</td>
            <td class="column15">&nbsp;</td>
            <td class="column16">&nbsp;</td>
            <td class="column17">&nbsp;</td>
            <td class="column18">&nbsp;</td>
            <td class="column19">&nbsp;</td>
            <td class="column20">&nbsp;</td>
            <td class="column21">&nbsp;</td>
            <td class="column22">&nbsp;</td>
            <td class="column23">&nbsp;</td>
            <td class="column24">&nbsp;</td>
            <td class="column25">&nbsp;</td>
            <td class="column26">&nbsp;</td>
            <td class="column27">&nbsp;</td>
            <td class="column28">&nbsp;</td>
            <td class="column29">&nbsp;</td>
            <td class="column30">&nbsp;</td>
            <td class="column31 style2 null"></td>
            <td class="column32 style2 null"></td>
            <td class="column33 style2 null"></td>
            <td class="column34 style2 null"></td>
            <td class="column35 style2 null"></td>
          </tr>
          <tr class="row6">
            <td class="column0 style67 s style69" rowspan="23">GENERADOR</td>
            <td class="column1 style70 s style71" colspan="9" rowspan="2">1. NÚM. DE REGISTRO COMO GENERADOR DE DESECHOS. </td>
            <td class="column10 style72 s style73" colspan="12" rowspan="2">2. NÚM.. DE LICENCIA AMBIENTAL</td>
            <td class="column22 style74 s style75" colspan="6" rowspan="2">3. No. DE MANIFIESTO</td>
            <td class="column28 style76 s style79" colspan="5" rowspan="2">4. PAGINA</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column1 style37 s style37" colspan="9"><?php echo $numRegistro ?? "S/N" ?></td>
            <td class="column10 style80 s style80" colspan="12"><?php echo $licAmbiental  ?? "" ?></td>
            <td class="column22 style27 n style27" colspan="6"><?php echo $numManifiesto ?? "" ?></td>
            <td class="column28 style35 n style36" colspan="5"><?php echo $pagina ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column1 style26 s style26" colspan="11">5. NOMBRE DE LA EMPRESA GENERADORA:</td>
            <td class="column12 style35 s style36" colspan="21"><?php echo $nombreEmpresaGeneradora ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column1 style26 s style26" colspan="11">6. REGISTRO ÚNICO DE CONTRIBUYENTES</td>
            <td class="column12 style35 s style36" colspan="21"><?php echo $ruc ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column1 style26 s style26" colspan="11">7. NOMBRE DE LA INSTALACIÓN GENERADORA:</td>
            <td class="column12 style35 s style36" colspan="21"><?php echo $nombreInstalacion?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column1 style37 s style37" colspan="4">DOMICILIO <br />
(CALLE Y NO):</td>
            <td class="column5 style27 s style27" colspan="14"><?php echo $domicilioInstalacion?? "" ?></td>
            <td class="column19 style33 s style33" colspan="3">PROV.</td>
            <td class="column22 style29 s style30" colspan="11"><?php echo $provinciaInstalacion?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column1 style26 s style26" colspan="7">CANTÓN </td>
            <td class="column8 style27 s style27" colspan="11"><?php echo $cantonInstalacion?? "" ?>i</td>
            <td class="column19 style28 s style28" colspan="3">PARROQUIA:</td>
            <td class="column22 style29 s style30" colspan="11"><?php echo $parroquiaInstalacion?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column1 style31 s style31" colspan="2">No  ONU </td>
            <td class="column3 style32 n style32" colspan="13"><?php echo $nOnuInstalacion?? "" ?></td>
            <td class="column16 style33 s style33" colspan="3">TEL</td>
            <td class="column19 style34 null style34" colspan="13"><?php echo $telefonoInstalacion?? "" ?></td>
            <td class="column32 style11 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row15">
            <td class="column1 style4 null"></td>
            <td class="column2 style38 null style39" colspan="31"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column1 style26 s style26" colspan="9" rowspan="2">8. DESCRIPCIÓN (Nombre del desecho de acuerdo al Listado Nacional e indicar CRTIB)</td>
            <td class="column10 style33 s style33" colspan="6" rowspan="2">Código del Desecho</td>
            <td class="column16 style33 s style33" colspan="7">CONTENEDOR</td>
            <td class="column23 style40 s style40" colspan="5">CANTIDAD TOTAL</td>
            <td class="column28 style41 s style42" colspan="5">UNIDAD</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column16 style33 s style33" colspan="2">TIPO</td>
            <td class="column18 style33 s style33" colspan="5">CAPACIDAD</td>
            <td class="column23 style43 s style43" colspan="5">DEL DESECHO</td>
            <td class="column28 style44 s style45" colspan="5">VOLUMEN/PESO</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <?php foreach ($aee as $ae) : ?>
          <tr class="row18">
            <td class="column1 style37 s style37" colspan="9"><?php echo $ae->nombre ?? "" ?></td>
            <td class="column10 style27 s style27" colspan="6"><?php echo $ae->codigo  ?? "" ?></td>
            <td class="column16 style46 s style46" colspan="2"><?php echo $ae->tipo_contenedor ?? "" ?></td>
            <td class="column18 style46 s style46" colspan="5"><?php echo $ae->capacidad_contenedor ?? "" ?></td>
            <td class="column23 style27 s style27" colspan="5"><?php echo $ae->cantidad ?? "" ?></td>
            <td class="column28 style35 s style36" colspan="5"><?php echo $ae->unidades?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <?php endforeach; ?>
         
          <tr class="row20">
            <td class="column1 style37 s style37" colspan="9"></td>
            <td class="column10 style27 s style27" colspan="6"></td>
            <td class="column16 style27 s style27" colspan="2"></td>
            <td class="column18 style27 s style27" colspan="5"></td>
            <td class="column23 style27 s style27" colspan="5"></td>
            <td class="column28 style35 s style36" colspan="5"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          
          <tr class="row21">
            <td class="column1 style47 s style48" colspan="32">9. INSTRUCCIONES ESPECIALES E INFORMACIÓN ADICIONAL PARA EL MANEJO SEGURO (INDICAR INCOMPATIBILIDAD):</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column1 style47 s style48" colspan="32" rowspan="2"><?php echo $informacionManifiestoProductor->instrucciones_especiales ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column1 style49 s style50" colspan="32">10. CERTIFICACIÓN DEL GENERADOR:</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column1 style51 s style52" colspan="32">DECLARO QUE EL CONTENIDO DE ESTE LOTE ESTA TOTAL Y CORRECTAMENTE DESCRITO MEDIANTE EL NOMBRE DEL DESECHO, CARACTERÍSTICAS CRTIB, BIEN EMPACADO, ENVASADO MARCADO Y ROTULADO, NO ESTÁ MEZCLADO CON DESECHOS O MATERIALES INCOMPATIBLES, SE HAN PREVISTO LAS CONDICIONES DE SEGURIDAD PARA SU TRANSPORTE POR VÍA TERRESTRE DE ACUERDO A LA LEGISLACIÓN NACIONAL VIGENTE.</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row26">
            <td class="column1 style53 s style53" colspan="11">NOMBRE, CARGO Y FIRMA DEL RESPONSABLE</td>
            <td class="column12 style54 s style55" colspan="21"><?php echo $informacionManifiestoProductor->nombre_productor ?? "" ; echo  $informacionManifiestoProductor->cargo_productor ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row27">
            <td class="column1 style26 s style26" colspan="9">TELÉFONO Y/O CORREO ELECTRÓNICO DE RESPONSABLE</td>
            <td class="column10 style56 n style57" colspan="23"><?php echo $informacionManifiestoProductor->telefono_productor ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column1 style58 s style58" colspan="9">NO. DE RESOLUTIVO DE NO REUSO/RECICLAJE EN LA INSTALACIÓN: <?php echo $informacionManifiestoProductor->numero_resolutivo ?? "" ?></td>
            <td class="column10 style59 s style59" colspan="12">FECHA:</td>
            <td class="column22 style60 s style61" colspan="11"><?php echo $informacionManifiestoProductor  != "" ?  date('d-m-Y',strtotime($informacionManifiestoProductor->fecha_salida))  : "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0 style62 s style63" rowspan="14">TRANSPORTE</td>
            <td class="column1 style64 s style64" colspan="12">11. NOMBRE DE LA EMPRESA TRANSPORTISTA:</td>
            <td class="column13 style65 null style65" colspan="20"> <?php echo $informacionEmpresaTransportista[0]->Usuario->nombre ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row30">
            <td class="column1 style66 s style66" colspan="5">DOMICILIO:</td>
            <td class="column6 style34 s style132" colspan="27"><?php echo $informacionEmpresaTransportista[0]->Usuario->domicilio ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row31">
            <td class="column1 style81 s style81" colspan="8" rowspan="2">TEL. <?php echo $informacionEmpresaTransportista[0]->Usuario->telefono?? "" ?> </td>
            <td class="column9 style82 s style82" colspan="5" rowspan="2">NO. DE LICENCIA AMBIENTAL DEL MAE: <?php echo $informacionEmpresaTransportista[0]->Usuario->licencia_ambiental ?? "" ?> </td>
            <td class="column14 style83 s style83" colspan="8" rowspan="2">NO. DE LICENCIA DE POLICÍA NACIONAL. <?php echo $informacionEmpresaTransportista[0]->licencia_policia ?? "" ?>  </td>
            <td class="column22 style84 s style84" colspan="11" rowspan="2">NO. DE PLAN DE CONTINGENCIAS APROBADO: <?php echo $informacionEmpresaTransportista[0]->plan_contingencia ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row33">
            <td class="column1 style64 s style64" colspan="8" rowspan="3">Si el desecho se exporta, indicar  N/A</td>
            <td class="column9 style83 s style83" colspan="4" rowspan="3">No de embarque:</td>
            <td class="column13 style84 s style84" colspan="20">Puerto de salida:</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row34">
            <td class="column13 style85 s style85" colspan="20">Fecha:</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row35">
            <td class="column13 style85 s style85" colspan="20">Autorización:</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row36">
            <td class="column1 style86 s style86" colspan="32">12. RECIBÍ LOS DESECHOS DESCRITOS EN EL MANIFIESTO PARA SU TRANSPORTE.</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row37">
            <td class="column1 style64 s style133" colspan="20">NOMBRE:  <?php echo $datosTransportista->Usuario->nombre ?? "" ?> </td>
            <td class="column21 style87 s style87" colspan="2">FIRMA</td>
            <td class="column23 style88 null style88" colspan="10"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row38">
            <td class="column1 style64 s style64" colspan="3">CARGO:</td>
            <td class="column4 style89 s style89" colspan="17"><?php echo $datosTransportista->cargo ?? "" ?> </td>
            <td class="column21 style87 s style87" colspan="6">FECHA DE EMBARQUE:</td>
            <td class="column27 style87 n style87" colspan="2"><?php echo  $manifiestoTransportista  != "" ?   date('d',strtotime($manifiestoTransportista->fecha_embarque))  : "" ?></td>
            <td class="column29 style90 n style90" colspan="2"><?php echo  $manifiestoTransportista  != "" ? date('m',strtotime($manifiestoTransportista->fecha_embarque))  :"" ?></td>
            <td class="column31 style88 n style88" colspan="2"><?php echo  $manifiestoTransportista  != "" ? date('Y',strtotime($manifiestoTransportista->fecha_embarque))  : "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row39">
            <td class="column1 style96 null style96" colspan="3"></td>
            <td class="column4 style87 null style87" colspan="17"></td>
            <td class="column21 style87 null style87" colspan="5"></td>
            <td class="column26">&nbsp;</td>
            <td class="column27 style97 s style97" colspan="2">DÍA</td>
            <td class="column29 style97 s style97" colspan="2">MES</td>
            <td class="column31 style98 s style98" colspan="2">AÑO</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row40">
            <td class="column1 style91 s style91" colspan="32">13. RUTA DE LA EMPRESA GENERADORA HASTA SU ENTREGA.</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row41">
            <td class="column1 style92 s style92" colspan="6">PROVINCIA, CANTÓN Y PARROQUIAS INTERMEDIAS</td>
            <td class="column7 style93 s style93" colspan="9"><?php echo $manifiestoTransportista->punto_salida ?? "" ;  echo $manifiestoTransportista->punto_llegada   ?? "" ?></td>
            <td class="column16 style92 s style92" colspan="8">CARRETERAS O CAMINOS UTILIZADOS</td>
            <td class="column24 style93 s style93" colspan="9"><?php echo  $manifiestoTransportista->carreteras   ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row42">
            <td class="column1 style94 s style94" colspan="19">14. TIPO  DE VEHÍCULO   <?php echo $datosTransportista->tipo_auto ?? "" ?></td>
            <td class="column20 style95 s style95" colspan="13">No. DE PLACA:  <?php echo $datosTransportista->placa ?? "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row43">
            <td class="column0 style63 s style103" rowspan="20">DESTINATARIO </td>
            <td class="column1 style104 s style104" colspan="11">15. NOMBRE DE LA EMPRESA DESTINATARIA:</td>
            <td class="column12 style105 s style105" colspan="20"><?php echo $datosEmpresaDestinataria->Usuario->nombre ?? "" ?></td>
            <td class="column32 style5 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row44">
            <td class="column1 style102 s style102" colspan="32">15.1 NÚMERO DE LICENCIA AMBIENTAL:   <?php echo $datosEmpresaDestinataria->Usuario->licencia_ambiental ?? "" ?> </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row45">
            <td class="column1 style64 s style64" colspan="4">DOMICILIO:</td>
            <td class="column5 style106 s style106" colspan="27"> <?php echo $datosEmpresaDestinataria->Usuario->domicilio ?? "" ?> </td>
            <td class="column32 style3 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row46">
            <td class="column1 style102 s style102" colspan="32">15.2 En caso de existir diferencias en la Verificación de entrega (Marcar con una X) :          </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row47">
            <td class="column1 style107 null style107" colspan="32"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row48">
            <td class="column1 style108 null style108" colspan="4"></td>
            <td class="column5 style99 s style99" colspan="4">Cantidad</td>
            <td class="column9 style10 s"> <?php echo   $manifiestoDestinatario != null && $manifiestoDestinatario->diferencias_entregas  == 0   ? "  X" : "" ?></td>
            <td class="column10 style99 s style99" colspan="4">Tipo  </td>
            <td class="column14 style6 s"> <?php echo $manifiestoDestinatario != null && $manifiestoDestinatario->diferencias_entregas == 1 ? "  X" : "" ?></td>
            <td class="column15 style99 s style99" colspan="4">Desecho  </td>
            <td class="column19 style10 s"> <?php echo $manifiestoDestinatario != null && $manifiestoDestinatario->diferencias_entregas == 2 ? "  X" : "" ?></td>
            <td class="column20 style100 s style100" colspan="4">&nbsp;Rechazo parcial  </td>
            <td class="column24 style6 s"> <?php echo $manifiestoDestinatario != null && $manifiestoDestinatario->diferencias_entregas == 3 ? "  X" : "" ?></td>
            <td class="column25 style99 s style99" colspan="4">&nbsp;Rechazo total  </td>
            <td class="column29 style6 s"> <?php echo   $manifiestoDestinatario != null && $manifiestoDestinatario->diferencias_entregas == 4 ? "  X" : "" ?></td>
            <td class="column30 style101 null style101" colspan="3"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row49">
            <td class="column1 style102 s style102" colspan="32">15.3 Destinatario alterno.</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row50">
            <td class="column1 style64 s style64" colspan="3">Nombre: </td>
            <td class="column4 style115 s style115" colspan="16"> <?php echo  $datosEmpresaDestinatariaAlterna->Usuario->nombre ?? "" ?></td>
            <td class="column20 style54 null style54" colspan="13"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row51">
            <td class="column1 style64 s style64" colspan="3">Teléfono:</td>
            <td class="column4 style116 s style116" colspan="16"><?php echo  $datosEmpresaDestinatariaAlterna->Usuario->telefono ?? "" ?></td>
            <td class="column20 style115 s style115" colspan="6">No. de Licencia Ambiental</td>
            <td class="column26 style7 null"> <?php echo  $datosEmpresaDestinatariaAlterna->Usuario->licencia_ambiental ?? "" ?></td>
            <td class="column27 style54 null style54" colspan="6"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row52">
            <td class="column1 style109 s style109" colspan="22" rowspan="2">15.4 Nombre y Firma del responsable del destinatario alterno. </td>
            <td class="column23 style110 s style110" colspan="4" rowspan="2">FECHA</td>
            <td class="column27 style111 null style111" colspan="2"><?php echo  $manifiestoDestinatario  != "" ? date('d',strtotime($manifiestoDestinatario->fecha_destinatario_alterno))  : "" ?></td>
            <td class="column29 style111 null style111" colspan="2"><?php echo  $manifiestoDestinatario  != "" ? date('m',strtotime($manifiestoDestinatario->fecha_destinatario_alterno))  : "" ?></td>
            <td class="column31 style112 null style112" colspan="2"><?php echo $manifiestoDestinatario  != "" ? date('Y',strtotime($manifiestoDestinatario->fecha_destinatario_alterno))  : "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row53">
            <td class="column27 style113 s style113" colspan="2">DÍA</td>
            <td class="column29 style113 s style113" colspan="2">MES</td>
            <td class="column31 style114 s style114" colspan="2">AÑO</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row54">
            <td class="column1 style81 s style81" colspan="8" rowspan="2">15.5 MANEJO QUE SE DARÁ AL DESECHO (Indicar con X y o especificar)</td>
            <td class="column9 style28 s style28" colspan="4">REUSO/RECICLAJE</td>
            <td class="column13 style28 s style28" colspan="4">TRATAMIENTO</td>
            <td class="column17 style28 s style28" colspan="4">CO-PROCESAMIENTO</td>
            <td class="column21 style28 s style28" colspan="4">INCINERACIÓN</td>
            <td class="column25 style28 s style28" colspan="4">RELLENO DE SEGURIDAD</td>
            <td class="column29 style117 s style117" colspan="4">OTROS</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row55">
            <td class="column9 style118 null style118" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 0 ? "  X" : "" ?></td>
            <td class="column13 style119 s style119" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 1 ? "  X" : "" ?></td>
            <td class="column17 style119 null style119" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 2 ? "  X" : "" ?></td>
            <td class="column21 style120 null style120" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 3 ? "  X" : "" ?></td>
            <td class="column25 style120 null style120" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 4 ? "  X" : "" ?></td>
            <td class="column29 style121 null style121" colspan="4"><?php echo $manifiestoDestinatario != null &&  $manifiestoDestinatario->manejo == 5 ? "  X" : "" ?></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row56">
            <td class="column1 style125 s style125" colspan="32">16.  CERTIFICACIÓN DE LA RECEPCIÓN DE  LOS DESECHOS DESCRITOS EN EL MANIFIESTO INDICADOS EN EL MANIFIESTO EXCEPTO LO INDICADO EN EL PUNTO 12.</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row57">
            <td class="column1 style86 s style86" colspan="32">OBSERVACIONES: </td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row58">
            <td class="column1 style126 null style126" colspan="4"></td>
            <td class="column5 style123 null style123" colspan="18"><?php echo  $manifiestoDestinatario->observaciones?? ""?></td>
            <td class="column23 style127 null style127" colspan="9"></td>
            <td class="column32 style3 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row59">
            <td class="column1 style64 s style64" colspan="3">NOMBRE:</td>
            <td class="column4 style115 s style115" colspan="16"><?php echo  $manifiestoDestinatario->nombre_encargado?? ""?></td>
            <td class="column20 style128 s style128" colspan="4">FIRMA:</td>
            <td class="column24 style116 null style116" colspan="8"></td>
            <td class="column32 style3 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row60">
            <td class="column1 style64 s style64" colspan="2">CARGO:</td>
            <td class="column3 style106 s style106" colspan="17"><?php echo  $manifiestoDestinatario->cargo_encargado ?? ""?></td>
            <td class="column20 style122 s style122" colspan="6">FECHA DE RECEPCIÓN</td>
            <td class="column26 style123 s style123" colspan="6">&nbsp;&nbsp;<?php echo $manifiestoDestinatario  != "" ? date('d-m-Y',strtotime($manifiestoDestinatario->fecha_encargado)) : ""?></td>
            <td class="column32 style3 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row61">
            <td class="column1 style124 null style124" colspan="25"></td>
            <td class="column26 style97 s style97" colspan="2">DÍA</td>
            <td class="column28 style97 s style97" colspan="3">MES</td>
            <td class="column31 style98 s style98" colspan="2">AÑO</td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row62">
            <td class="column1 style131 null style131" colspan="32"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row63">
            <td class="column0 style12 null"></td>
            <td class="column1 style13 null"></td>
            <td class="column2 style13 null"></td>
            <td class="column3 style13 null"></td>
            <td class="column4 style13 null"></td>
            <td class="column5 style13 null"></td>
            <td class="column6 style13 null"></td>
            <td class="column7 style13 null"></td>
            <td class="column8 style13 null"></td>
            <td class="column9 style13 null"></td>
            <td class="column10 style13 null"></td>
            <td class="column11 style13 null"></td>
            <td class="column12 style13 null"></td>
            <td class="column13 style13 null"></td>
            <td class="column14 style13 null"></td>
            <td class="column15 style13 null"></td>
            <td class="column16 style13 null"></td>
            <td class="column17 style13 null"></td>
            <td class="column18 style13 null"></td>
            <td class="column19 style13 null"></td>
            <td class="column20 style13 null"></td>
            <td class="column21 style13 null"></td>
            <td class="column22 style13 null"></td>
            <td class="column23 style13 null"></td>
            <td class="column24 style13 null"></td>
            <td class="column25 style13 null"></td>
            <td class="column26 style13 null"></td>
            <td class="column27 style13 null"></td>
            <td class="column28 style13 null"></td>
            <td class="column29 style13 null"></td>
            <td class="column30 style13 null"></td>
            <td class="column31 style13 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row64">
            <td class="column0 style15 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">INSTRUCCIONES:</td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row65">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">1.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">Una vez que el generador obtenga el No. de registro y de Licencia Ambiental como generador de desechos peligroso deberá obtener del Ministerio del Ambiente el presente formato </span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row66">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">2.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">Para cada embarque o volumen de transporte, el generador deberá entregar al transportista un manifiesto en original, debidamente firmado, y dos copias del mismo.</span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row67">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">3.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">El transportista conservará una de las copias que le entregue el generador, para su archivo, y firmará el original del manifiesto, mismo que entregará al destinatario, junto con una copia de éste, en el momento en que le entregue los desechos peligrosos al destinatario.</span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row68">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">4.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">El destinatario de los desechos peligrosos conservará la copia del manifiesto que le entregue el transportista, para su archivo, y firmará el original, mismo que deberá remitir de inmediato al generador.</span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row69">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">5.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">El original del manifiesto y las copias del mismo, deberán ser conservadas por el generador, por el transportista y por el destinatario de los desechos peligrosos, respectivamente, conforme lo marque el Ministerio del Ambiente.</span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row70">
            <td class="column0 style17 null"></td>
            <td class="column1 style8 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style8 null"></td>
            <td class="column4 style129 s style129" colspan="27">6.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">Una vez que los desechos peligrosos y el manifiesto se haya entregado al transportista y de contar con los medios, el generador podrá enviar vía correo electrónico o fax este manifiesto al Ministerio del Ambiente.</span></td>
            <td class="column31 style8 null"></td>
            <td class="column32 style16 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
          <tr class="row71">
            <td class="column0 style18 null"></td>
            <td class="column1 style19 null"></td>
            <td class="column2 style20 null"></td>
            <td class="column3 style19 null"></td>
            <td class="column4 style130 s style130" colspan="27">7.<span style="color:#000000; font-family:'Times New Roman'; font-size:7pt">     </span><span style="color:#000000; font-family:'Arial'; font-size:8pt">Llenar con letra de molde, máquina o computadora.</span></td>
            <td class="column31 style19 null"></td>
            <td class="column32 style21 null"></td>
            <td class="column33">&nbsp;</td>
            <td class="column34">&nbsp;</td>
            <td class="column35">&nbsp;</td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
