<?php

if (isset($_GET['url']) && !empty($_GET['url'])) {
   $auxUrl = trim($_GET['url'], '/');
   $url = explode('/', $auxUrl);
   if ($url[0] === "admin") {
      $path_file = "views/admin/$url[1].php";
      if (file_exists($path_file)) {
         require_once $path_file;
      } else {
         header("Location: " . URL_BASE_APP . "admin/dashboard");
      }
   } else {
      // $url[0] => debe tener el nombre exacto de la vista a cargar
      $path_file = "views/client/$url[0].php";
      if (file_exists($path_file)) {
         require_once $path_file;
      } else {
         header("Location: " . URL_BASE_APP);
      }
   }
} else {
   require_once "client/home.php";
}
