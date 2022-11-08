<?php

class Core
{
   function __construct()
   {
      $this->init_project();
   }


   private function init_project()
   {
      session_start();
      require 'vendor/autoload.php';
      $this->init_config();
      // inicializar cookies
      // inicializar valirables de sesion 
      // inicializar archivos de configuracion 
      // etc.
   }

   private function init_config()
   {
      require_once "core/config.php";
      require_once "controllers/login.controller.php";
   }

   public function load_template()
   {
      require_once("./views/template.php");
   }
}