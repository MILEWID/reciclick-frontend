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
      <?php require_once "layout/navbar.php" ?>
      <div class="container-fluid page-body-wrapper">
         <?php require_once "layout/sidebar.php" ?>
         <div class="main-panel">
            <div class="content-wrapper">
               <?php require_once "modules/listar_aee_module.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script>
         axios.defaults.baseURL = "<?php echo URL_API_M2; ?>";
         axios.defaults.headers.common['Authorization'] = "Bearer <?php echo $_SESSION["userLoggedToken"] ?>";
      </script>
      <script src="<?php echo URL_BASE_APP; ?>js-apis/productor.admin.js"></script>
      <script>
         $(document).ready(function() {
            $.ajaxSetup({
               headers: {
                  'Authorization': "Bearer <?php echo $_SESSION["userLoggedToken"] ?>"
               }
            });

            $('#tablaAEE').DataTable({
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
                        return `<button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>`;
                     },
                  },
                  {
                     targets: -2,
                     title: 'Estado',
                     orderable: false,
                     render: function(data, type, full, meta) {
                        console.log(full);
                        if (data == 1) {
                           return '<div class="badge badge-success badge-pill">Activo</div>';
                        }
                        return '<div class="badge badge-success badge-pill">Activo</div>';
                     },
                  },
               ],
            });
         });
      </script>
</body>

</html>