<?php
$isEdit = isset($_GET['id']);
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">
            <?php
            if ($isEdit) {
                echo 'Editar usuario transportista';
            } else {
                echo 'Agregar usuario transportista';
            }
            ?>
        </h4>
        <form id="formTransportista">
            <?php
            if ($isEdit) {
                echo '<input type="hidden" id="id_utransportista" value="' . $_GET['id'] . '">';
                echo '<input type="hidden" id="id_usuario" >';
            }
            ?>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="usuario">Nombre de usuario</label>
                    <input type="text" <?php echo $isEdit ? "disabled" : "" ?> class="form-control" id="usuario" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="identificacion">Identificación</label>
                    <input type="text" <?php echo $isEdit ? "disabled" : "" ?> maxlength="13" class="form-control" id="identificacion" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" <?php echo $isEdit ? "disabled" : "" ?> class="form-control" id="correo" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="password">Contraseña</label>
                    <input type="password" <?php echo $isEdit ? "disabled" : "" ?> class="form-control" id="password" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" maxlength="10" class="form-control" id="telefono" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" id="domicilio" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="licencia_ambiental">Licencia ambiental</label>
                    <input type="text" class="form-control" id="licencia_ambiental" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="cargo">Cargo</label>
                    <input type="text" class="form-control" id="cargo" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="tipo_auto">Tipo de vehículo</label>
                    <input type="text" class="form-control" id="tipo_auto" placeholder="" required>
                </div>
                <div class="col-12 mt-4 col-md-6 mt-md-0">
                    <label for="placa">Placa vehículo</label>
                    <input type="text" maxlength="7" class="form-control" id="placa" placeholder="" required>
                </div>
            </div>

            <div class="text-right">
                <a id="btnCancelar" data-url-home="<?php echo URL_BASE_APP; ?>empresa-transportista/listado-transportista" href="<?php echo URL_BASE_APP; ?>empresa-transportista/listado-transportista" class="btn btn-light">Cancelar</a>
                <button type="submit" class="btn btn-primary mr-2">Guardar</button>
            </div>
        </form>
    </div>
</div>