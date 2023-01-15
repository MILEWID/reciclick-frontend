<?php

$folderPath = dirname($_SERVER["SCRIPT_NAME"]);
$urlPath =  $_SERVER["REQUEST_URI"];
$url = substr($urlPath, strlen($folderPath));

define("URL", $url);
define("URL_BASE_APP", "http://localhost/reciclick-frontend/");
//micriservicio de autenticacion 
define("URL_API_M1", "http://localhost:4010/api/v1");
// microservicio de empresa productora
define("URL_API_M2", "http://localhost:4010/api/v1");
// microservicio de transporte
define("URL_API_M3", "http://localhost:4010/api/v1");
// microservicio de almacenamiento 
define("URL_API_M4", "http://localhost:4010/api/v1");
session_start();