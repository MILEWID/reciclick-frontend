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
                     visible: false,
                     searchable: false,
                  },
                  {
                     name: 'fase',
                     data: 'Manifiesto.fase'
                  },
                  {
                     name: 'id_manifiesto_productor',
                     data: 'Manifiesto.Manifiesto_Productor'
                  },
                  {
                     name: 'id_manifiesto_transportista',
                     data: 'Manifiesto.Manifiesto_Destinatario'
                  },
                  {
                     name: 'id_manifiesto_destinatario',
                     data: 'Manifiesto.Manifiesto_Transportistum'
                  },
                  {
                     name: 'Acciones',
                     searchable: false,
                     className: "d-flex"
                  },
               ],

               columnDefs: [
                  {
                     targets: -1,
                     title: 'Acciones',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return `<a href="<?php echo URL_BASE_APP; ?>admin/pdf-manifiesto?p=jajaja&al=bwlksdn" type="button"  onclick="mostrarManifiesto(${full.id_manifiesto})" class="btn btn-outline-secondary btn-rounded btn-icon d-flex align-items-center justify-content-center mr-2"><i class="fas fa-eye text-primary"></i></a>
                        <a href="<?php echo URL_BASE_APP; ?>empresa-productora/editaaee/?id=${full.Manifiesto.Manifiesto_Productor.id_instalacion}" class="btn btn-outline-secondary btn-rounded btn-icon d-flex align-items-center justify-content-center"><i class="fas fa-edit text-warning"></i></a>`;
                     },
                  },
                  {
                     targets: -2,
                     title: 'Documento ',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        return `<a href="<?php echo URL_BASE_APP; ?>admin/pdf-manifiesto?p=jajaja&al=bwlksdn" type="button"  onclick="mostrarManifiesto(${full.id_manifiesto})" class="btn  d-flex align-items-center justify-content-center mr-2">pdf</a>
                       `;
                     },
                  },
                  {
                     targets: -3,
                     title: 'Almacenamiento',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        if (!data) {
                           return "S/N"
                        } else {
                           return data.autorizacion
                        }
                     },
                  },
                  {
                     targets: -4,
                     title: 'Transportista',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        if (!data) {
                           return "S/N"
                        } else {
                           console.log(data);
                        }
                     },
                  },
                  {
                     targets: -5,
                     title: 'Productor',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        if (!data) {
                           return "S/N"
                        } else {
                           return data.nombre_productor;
                        }
                     },
                  },
                  {
                     targets: -6,
                     title: 'Codigo Manifiesto',
                     orderable: true,
                     render: function(data, type, full, meta) {
                        if (!full) {
                           return "S/N"
                        } else {
                           return full.id_manifiesto;
                        }
                     },
                  },
               ],
            });
         });
      </script>
</body>

</html>