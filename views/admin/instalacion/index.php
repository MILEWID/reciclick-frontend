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

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Listado de instalaciones</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="tableTransportista" class="table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Nombre</th>
                                                    <th>Domicilio</th>
                                                    <!-- <th>Provincia</th>
                                                    <th>Cantón</th>
                                                    <th>Parroquia</th> -->
                                                    <th>No ONU</th>
                                                    <th>Teléfono</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- SE CARGAN LOS SCRIPTS -->
        <?php require_once "views/layout/footer-admin.php" ?>
        <script src="<?php echo URL_BASE_APP; ?>js-apis/etransportista.admin.js"></script>
        <script>
            var datatable;
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'Authorization': "Bearer <?php echo $_SESSION["userLoggedToken"] ?>"
                    }
                });

                datatable = $('#tableTransportista').DataTable({
                    language: {
                        url: '<?php echo URL_BASE_APP; ?>javascript/spanish-datatale.json',
                    },
                    ajax: {
                        url: '<?php echo URL_API_M2; ?>/instalaciones',
                        dataSrc: ''
                    },
                    columns: [{
                            name: 'id_instalacion',
                            data: 'id_instalacion',
                            visible: false,
                            searchable: false,
                        },
                        {
                            name: 'nombre_instalacion',
                            data: 'nombre_instalacion'
                        },
                        {
                            name: 'domicilio',
                            data: 'domicilio'
                        },
                        // {
                        //     name: 'provincia',
                        //     data: 'provincia'
                        // },
                        // {
                        //     name: 'canton',
                        //     data: 'canton'
                        // },
                        // {
                        //     name: 'parroquia',
                        //     data: 'parroquia'
                        // },
                        {
                            name: 'n_onu',
                            data: 'n_onu'
                        },
                        {
                            name: 'telefono',
                            data: 'telefono'
                        },
                        {
                            name: 'estado',
                            data: 'estado'
                        },
                        {
                            // TODO: cambiar acciones
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
                                // TODO: realializar eliminar
                                // <button type="button"  id="eliminarItem" onclick="eliminarUsuarioTransportista(${full.id_instalacion})" class="btn btn-outline-secondary btn-rounded btn-icon p-0 mr-2"><i class="fas fa-trash text-danger"></i></button>
                                return `
                                <a href="<?php echo URL_BASE_APP; ?>empresa-productora/editar-instalacion/?id=${full.id_instalacion}" class="btn btn-outline-secondary btn-rounded btn-icon d-flex align-items-center justify-content-center"><i class="fas fa-edit text-warning"></i></a>`;
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
                        {
                            targets: -5,
                            title: 'Dirección',
                            orderable: false,
                            render: function(data, type, full, meta) {
                                return `<div>
                                <p class="mb-0"><strong>Domicilio: </strong>${full.domicilio}</p>
                                <p class="mb-0"><strong>Provincia: </strong>${full.provincia}</p>
                                <p class="mb-0"><strong>Cantón: </strong>${full.canton}</p>
                                <p class="mb-0"><strong>Parroquia: </strong>${full.parroquia}</p>
                                </div>`
                            },
                        },
                    ],
                });
            });
        </script>
</body>

</html>