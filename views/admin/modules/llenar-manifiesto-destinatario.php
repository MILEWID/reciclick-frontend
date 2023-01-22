<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body custom">
                <h4 class="card-title">GENERAR DATOS PARA EL MANIFIESTO PARTE DEL DESTINATARIO</h4>
                <form id="addMani" action="#">
                    <div class="custom-container">
                        <h3>Datos de la Entrega </h3>
                        <section>
                            <div class="d-flex">
                                <div class="form-group col-6">
                                    <label>Id Manifiesto</label>
                                    <input id="idManifiesto" type="text" value="<?php echo $_GET['manifiesto'] ?? "-1"; ?>" class="form-control" disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label>Diferencias de Entrega</label>
                                    <select id="diferencias" type="text" class="form-control" id="diferencias">
                                        <option value="0">Cantidad</option>
                                        <option value="1">Tipo</option>
                                        <option value="2">Desecho</option>
                                        <option value="3">Rechazo Total</option>
                                        <option value="4">Rechazo Parcial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Destinatario Alterno</label>
                                <select type="text" class="form-control" id="destAlt">
                                    <option value="0"></option>
                                </select>
                                <small>los campos de destinatario alterno no son obligatorios</small>
                            </div>
                            <div class="row px-2 mb-1">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre del destinatario Alterno </label>
                                        <input type="text" class="form-control" id="nombreDestAlt" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Telefono del destinatario alterno </label>
                                        <input type="text" class="form-control" placeholder="" id="telDestAlt" disabled>
                                    </div>
                                    <p class="text-address"></p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nro Licencia destinatario Alterno </label>
                                        <input type="text" class="form-control" id="licDestAlt" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha del Destinatario Alterno </label>
                                        <input type="date" class="form-control" placeholder="" value="<?php echo date('Y-m-d') ?>" id="fechaDestAlt">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Manejo que se le dará al resíduo </label>
                                <select class="form-control" id="manejo">
                                    <option value="0">Rehuso/Reciclaje</option>
                                    <option value="1">Tratamiento</option>
                                    <option value="2">Coprocesamiento</option>
                                    <option value="3">Incineración</option>
                                    <option value="4">Rrelleno de seguridad</option>
                                    <option value="5">Otros</option>
                                </select>
                            </div>

                        </section>
                        <h3>Datos de la Entrega Parte 2 </h3>
                        <section>
                            <div class="row px-2 mb-1">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre Empresa Destinataria </label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->nombre ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Dirección Empresa Destinataria</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->domicilio ?>" id="direccion" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Telefono Empresa Destinataria </label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->telefono ?>" id="telefono" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Licencia Ambiental</label>
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->licencia_ambiental ?>" id="telefono" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre del Responsable </label>
                                        <input type="text" class="form-control" id="nombreEncargado">
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" id="fechaEncargado">
                                    </div>
                                    <div class="form-group">
                                        <label>Cargo del Responsable</label>
                                        <input type="text" class="form-control" id="cargoEncargado">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Observaciones </label>
                                <textarea type="text" class="form-control" id="observa"></textarea>
                            </div>

                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>