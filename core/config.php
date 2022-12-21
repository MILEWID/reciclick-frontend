<?php

$folderPath = dirname($_SERVER["SCRIPT_NAME"]);
$urlPath =  $_SERVER["REQUEST_URI"];
$url = substr($urlPath, strlen($folderPath));

define("URL", $url);
define("URL_BASE_APP", "http://localhost/reciclick-frontend/");
define("URL_API_M1", "https://microservicios-p49tw.ondigitalocean.app/api/v1");
