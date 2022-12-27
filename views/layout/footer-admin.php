<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo URL_BASE_APP; ?>vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo URL_BASE_APP; ?>vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/off-canvas.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/hoverable-collapse.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/misc.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/settings.js"></script>
<script src="<?php echo URL_BASE_APP; ?>javascript/admin/todolist.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    axios.defaults.baseURL = "<?php echo URL_API_M1; ?>";
    axios.defaults.headers.common['Authorization'] = "<?php echo $_SESSION["userLoggedToken"] ?>";
</script>
<!-- endinject -->