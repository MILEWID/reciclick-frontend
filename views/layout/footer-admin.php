<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo URL_BASE_APP; ?>vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo URL_BASE_APP; ?>vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->

<!-- inject:js -->
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/off-canvas.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/hoverable-collapse.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/misc.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/settings.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/todolist.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- endinject -->
<script>
    const configMicroservices = {
        service1: "<?php echo URL_API_M1 ?>",
        service2: "<?php echo URL_API_M2 ?>",
        service3: "<?php echo URL_API_M3 ?>",
        service4: "<?php echo URL_API_M4 ?>",
        token: "<?php echo $_SESSION['userLoggedToken']; ?>",
    }
</script>