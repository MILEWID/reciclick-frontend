<?php
$data = file_get_contents('javascript/ecuador.json');
$data = json_decode($data, true);
$data = json_encode($data);
?>
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
        <script>
            ecuador = <?php echo $data; ?>;
            let provincias = [];
            let cantones = [];
            let parroquias = [];

            for (const iterator of ecuador) {
                provincias.push(iterator.provincia);
                cantones[iterator.provincia] = [];
                for (const key in iterator.cantones) {

                    const element = iterator.cantones[key];
                    cantones[iterator.provincia].push(element.canton);
                    parroquias[element.canton] = [];

                    for (const key2 in element.parroquias) {
                        const element2 = element.parroquias[key2];
                        parroquias[element.canton].push(element2);
                    }
                }
            }

            const provincia = document.getElementById('provincia');
            const canton = document.getElementById('canton');
            const parroquia = document.getElementById('parroquia');
            const fragment = document.createDocumentFragment();

            provincias.forEach(element => {
                const option = document.createElement('option');
                option.value = element;
                option.innerHTML = element;
                fragment.appendChild(option);
            });
            provincia.appendChild(fragment);


            provincia.addEventListener('change', () => {
                const fragment = document.createDocumentFragment();
                canton.innerHTML = '<option value="" selected disabled >Seleccione cantón</option>';
                parroquia.innerHTML = '';
                cantones[provincia.value].forEach(element => {
                    const option = document.createElement('option');
                    option.value = element;
                    option.innerHTML = element;
                    fragment.appendChild(option);
                });
                canton.appendChild(fragment);
            });

            canton.addEventListener('change', () => {
                const fragment = document.createDocumentFragment();
                parroquia.innerHTML = '';
                parroquias[canton.value].forEach(element => {
                    const option = document.createElement('option');
                    option.value = element;
                    option.innerHTML = element;
                    fragment.appendChild(option);
                });
                parroquia.appendChild(fragment);
            });
        </script>

        <script src="<?php echo URL_BASE_APP; ?>js-apis/instalaciones.admin.js"></script>
        <script>
            const formInstalacion = document.getElementById('formInstalacion');
            formInstalacion.addEventListener('submit', registrarInstalacion);
        </script>
</body>

</html>