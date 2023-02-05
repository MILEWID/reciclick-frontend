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
                    <?php require_once "inc/formulario.php"; ?>
                </div>
            </div>
        </div>
        <!-- SE CARGAN LOS SCRIPTS -->
        <?php require_once "views/layout/footer-admin.php" ?>
        <script src="<?php echo URL_BASE_APP; ?>js-apis/etransportista.admin.js"></script>
        <script>
            <?php if (isset($_GET['id'])) { ?>
                obtenerUsuarioTransportista("<?php echo $_GET['id']; ?>");
                const formTransportista = document.getElementById('formTransportista');
                formTransportista.addEventListener('submit', function(event) {
                    event.preventDefault();
                    actualizarUsuarioTransportista(this);
                });
            <?php } ?>
        </script>
</body>

</html>