<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Usuario Reciclick</title>
   <?php require_once "views/layout/header-admin.php" ?>
</head>

<body>
   <div class="container-scroller">
      <?php require_once "views/admin/layout/navbar.php" ?>
      <div class="container-fluid page-body-wrapper">
         <?php require_once "views/admin/layout/sidebar.php" ?>
         <div class="main-panel">
            <div class="content-wrapper">
               <?php require_once "inc/tabla_manifiestos.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>
      <script>
         var datatable;
         $(document).ready(function() {
            $.ajaxSetup({
               headers: {
                  'Authorization': "Bearer <?php echo $_SESSION["userLoggedToken"] ?>"
               }
            });

            datatable = $('#tablaAEE').DataTable({
               language: {
                  url: '<?php echo URL_BASE_APP; ?>javascript/spanish-datatale.json',
               },
               ajax: {
                  url: '<?php echo URL_API_M2; ?>/obtener-manifiesto',
                  dataSrc: ''
               },
               columns: [{
                     name: 'id_manifiesto',
                     data: 'id_manifiesto',
                     class: 'text-center'
                  },
                  {
                     name: 'Manifiesto.id_manifiesto_productor',
                     data: 'Manifiesto.usuarios'
                  },
                  {
                     name: 'Manifiesto.id_manifiesto_transportista',
                     data: 'Manifiesto.usuarios'
                  },
                  {
                     name: 'Manifiesto.id_manifiesto_destinatario',
                     data: 'Manifiesto.usuarios'
                  },
                  {
                     name: 'Acciones',
                     searchable: false,
                     className: "d-flex"
                  },
               ],

               columnDefs: [{
                     targets: -1,
                     title: 'Acciones',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return `<a href="<?php echo URL_BASE_APP; ?>admin/pdf-manifiesto/?manifiesto=${full.id_manifiesto}" target="_blank" class="btn btn-outline-danger btn-rounded btn-icon d-flex align-items-center justify-content-center mr-2"><i class="fas fa-file-pdf"></i></a>
                        <a href="<?php echo URL_BASE_APP; ?>admin/pdf-manifiesto/?manifiesto=${full.id_manifiesto}" target="_blank" class="btn btn-outline-warning btn-rounded btn-icon d-flex align-items-center justify-content-center mr-2"><i class="fas fa-pen"></i></a> `;        
                     },
                  },
                  {
                     targets: -2,
                     title: 'Empresa Destinatario',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return data[1]?.Usuario?.nombre || "S/N";
                     },
                  },
                  {
                     targets: -3,
                     title: 'Empresa Transportista',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return data[2]?.Usuario?.nombre || "S/N";
                     },
                  },
                  {
                     targets: -4,
                     title: 'Empresa Productora',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return data[0]?.Usuario?.nombre || "S/N";
                     },
                  },
               ],
            });
         });
      </script>
</body>

</html>