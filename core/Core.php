<?php

class Core
{
   function __construct()
   {
      $this->init_project();
   }


   private function init_project()
   {
      // inicializar cookies
      // inicializar valirables de sesion 
      // inicializar archivos de configuracion 
      $this->init_config();
      // etc.
   }

   private function init_config()
   {
      require_once "core/config.php";
   }

   public function load_template()
   {
      require_once("./views/template.php");
   }
}
