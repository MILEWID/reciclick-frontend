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
               <?php require_once "inc/listar_trans_module.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>
      <script src="<?php echo URL_BASE_APP; ?>js-apis/productor.admin.js"></script>
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
                  url: '<?php echo URL_API_M2; ?>/aee',
                  dataSrc: ''
               },
               columns: [{
                     name: 'id_aee',
                     data: 'id_aee',
                     visible: false,
                     searchable: false,
                  },
                  {
                     name: 'instalacion',
                     data: 'Instalacione.nombre_instalacion'
                  },
                  {
                     name: 'nombre',
                     data: 'nombre'
                  },
                  {
                     name: 'codigo',
                     data: 'codigo'
                  },
                  {
                     name: 'capacidad_contenedor',
                     data: 'capacidad_contenedor'
                  },
                  {
                     name: 'tipo_contenedor',
                     data: 'tipo_contenedor'
                  },
                  {
                     name: 'cantidad',
                     data: 'cantidad'
                  },
                  {
                     name: 'unidades',
                     data: 'unidades'
                  },
                  {
                     name: 'Estado',
                     data: 'estado'
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
                        return `<button type="button"  id="eliminarItem" onclick="eliminarAee(${full.id_aee})" class="btn btn-outline-secondary btn-rounded btn-icon p-0 mr-2"><i class="fas fa-trash text-danger"></i></button>
                    <a href="<?php echo URL_BASE_APP; ?>empresa-productora/editaaee/?id=${full.id_aee}" class="btn btn-outline-secondary btn-rounded btn-icon d-flex align-items-center justify-content-center"><i class="fas fa-edit text-warning"></i></a>`;
                     },
                  },
                  {
                     targets: -2,
                     title: 'Estado',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        if (data == 1) {
                           return '<div class="badge badge-success badge-pill">Activo</div>';
                        }
                        return '<div class="badge badge-danger badge-pill">Inactivo</div>';
                     },
                  },
               ],
            });
         });
      </script>
</body>

</html>