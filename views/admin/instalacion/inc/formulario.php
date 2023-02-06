<?php
$isEdit = isset($_GET['id']);
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">
            <?php
            if ($isEdit) {
                echo 'Editar instalacion';
            } else {
                echo 'Agregar instalacion';
            }
            ?>
        </h4>
        <form id="formInstalacion">
            <?php
            if ($isEdit) {
                echo '<input type="hidden" id="id_instalacion" value="' . $_GET['id'] . '">';
            }
            ?>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="nombre_instalacion">Nombre de la Instalación</label>
                    <input type="text" class="form-control" id="nombre_instalacion" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="provincia">Provincia</label>
                    <!-- <input type="text" class="form-control" id="provincia" placeholder="" required> -->
                    <select class="form-control" id="provincia" required>
                        <option value="" selected disabled>Seleccione una provincia</option>
                    </select>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="canton">Cantón</label>
                    <!-- <input type="text" class="form-control" id="canton" placeholder="" required> -->
                    <select class="form-control" id="canton" required></select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="parroquia">Parroquia</label>
                    <!-- <input type="text" maxlength="10" class="form-control" id="parroquia" placeholder="" required> -->
                    <select class=" form-control" required id="parroquia"></select>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="n_onu">Número ONU</label>
                    <input type="text" class="form-control" id="n_onu" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" maxlength="10" id="telefono" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="estado">Estado</label>
                    <select class="form-control" id="estado">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
            </div>

            <div class="text-right">
                <a id="btnCancelar" data-url-home="<?php echo URL_BASE_APP; ?>empresa-productora/listado-instalaciones" href="<?php echo URL_BASE_APP; ?>empresa-productora/listado-instalaciones" class="btn btn-light">Cancelar</a>
                <button type="submit" class="btn btn-primary mr-2">Guardar</button>
            </div>
        </form>
    </div>
</div>