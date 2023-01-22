<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Usuario Reciclick</title>
   <?php require_once "views/layout/header-admin.php" ?>

   <!-- Enlaces del mapa -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
   <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>

   <link rel="stylesheet" href="<?php echo URL_BASE_APP; ?>css/admin/informacion-empresa.css">
</head>

<body>
   <div class="container-scroller">
      <?php require_once "layout/navbar.php" ?>
      <div class="container-fluid page-body-wrapper">
         <?php require_once "layout/sidebar.php" ?>
         <div class="main-panel">
            <div class="content-wrapper">
               <?php require_once "modules/llenar-manifiesto-destinatario.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>

      <script src="<?php echo URL_BASE_APP; ?>js-apis/destinatario.admin.js"></script>

      <script>
         (function($) {
            'use strict';
            var form = $("#addMani");
            form.children("div").steps({
               headerTag: "h3",
               bodyTag: "section",
               transitionEffect: "slideLeft",
               labels: {
                  cancel: "Cancelar",
                  current: "current step:",
                  pagination: "Paginación",
                  finish: "Enviar",
                  next: "Siguiente",
                  previous: "Regresar",
                  loading: "Cargando..."
               },
               onFinished: registrarManifiestoP3,
            });

         })(jQuery);
      </script>
      <script>
         obtenerDestinatarioAlterno("destAlt")
      </script>
      <script>
         const selectDest = document.getElementById("destAlt");
         selectDest.addEventListener("change", async (e) => {
            e.preventDefault();
            const nombre = document.getElementById("nombreDestAlt");
            const tel = document.getElementById("telDestAlt");
            const licDestAlt = document.getElementById("licDestAlt");
            try {
               nombre.value = "";
               tel.value = "";
               licDestAlt.value = "";
               const {
                  data
               } = await instanceService1.get("/empresa-destinatario/campo/id_edestinataria/" + e.target.value);

               nombre.value = data[0].Usuario.nombre;
               tel.value = data[0].Usuario.telefono;
               licDestAlt.value = data[0].Usuario.licencia_ambiental;
               
            } catch {
               return;
            }
         });
      </script>
</body>

</html>