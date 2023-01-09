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
               <?php require_once "modules/agregar-actualizar-aee.php" ?>
            </div>
         </div>
      </div>
      <!-- SE CARGAN LOS SCRIPTS -->
      <?php require_once "views/layout/footer-admin.php" ?>
      <script>
         axios.defaults.baseURL = "<?php echo URL_API_M2;?>";
         axios.defaults.headers.common['Authorization'] = "Bearer <?php echo $_SESSION["userLoggedToken"]?>";
         console.log(axios.defaults.headers.common['Authorization'] );
      </script>
      <script src="<?php echo URL_BASE_APP; ?>js-apis/productor.admin.js"></script>
</body>

</html>