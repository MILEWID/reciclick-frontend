<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Usuario Reciclick</title>
   <?php require_once "views/layout/header-admin.php" ?>
   <link rel="stylesheet" href="<?php echo URL_BASE_APP; ?>css/admin/informacion-usuario.css">
</head>

<body>
   <div class="container-scroller">
      <?php require_once "layout/navbar.php" ?>
      <div class="container-fluid page-body-wrapper">
         <?php require_once "layout/sidebar.php" ?>
         <div class="main-panel">
            <div class="content-wrapper">
               <?php require_once "modules/usuario_module.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>
      <script>
         axios.defaults.baseURL = "<?php echo URL_API_M1; ?>";
         axios.defaults.headers.common['Authorization'] = "Bearer <?php echo $_SESSION["userLoggedToken"] ?>";
      </script>
      <script src="<?php echo URL_BASE_APP; ?>js-apis/transportista.js"></script>
      <script src="<?php echo URL_BASE_APP; ?>javascript/admin2/usuario.admin.js"></script>
</body>

</html>