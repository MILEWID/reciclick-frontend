<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body custom">
                <h4 class="card-title">GENERAR DATOS PARA EL MANIFIESTO PARTE DEL PRODUCTOR</h4>
                <form id="addMani" action="#">
                    <div class="custom-container">
                        <h3>Datos de la Entrega </h3>
                        <section>
                            <div class="form-group row">
                                <div class="col-12 mb-4 col-md-6 m-md-0">
                                    <label for="numRegistro">Número de registro</label>
                                    <input type="text" class="form-control" id="numRegistro" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="numManifiesto">Número de manifiesto</label>
                                    <input type="text" class="form-control" id="numManifiesto" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-6">
                                    <label for="numIntrucciones">Instrucciones especiales</label>
                                    <input type="text" class="form-control" id="numIntrucciones" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="telefonoProductor">Teléfono productor</label>
                                    <input type="tel" class="form-control" id="telefonoProductor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 mb-4 col-md-6 m-md-0">
                                    <label for="nombreProductor">Nombre Resposable</label>
                                    <input type="text" class="form-control" id="nombreProductor" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="cargoProductor">Cargo Responsable</label>
                                    <input type="text" class="form-control" id="cargoProductor" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 mb-4 col-md-6 m-md-0">
                                    <label for="correoProductor">Correo Responsable</label>
                                    <input type="email" class="form-control" id="correoProductor" required>
                                </div>
                                <div class="col-12 mb-4 col-md-6 m-md-0">
                                    <label for="idInstalacion">Instalacion</label>
                                    <select class="form-control" id="idInstalacion" required></select>
                                </div>
                            </div>
                        </section>
                        <h3>Datos de la Entrega Parte 2 </h3>
                        <section>

                            <div class="form-group row">
                                <div class="col-12 mb-4 col-md-6 m-md-0">
                                    <label for="numResolutivo">Número resolutivo</label>
                                    <input type="number" class="form-control" id="numResolutivo" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="fechaSalida">Fecha salida</label>
                                    <input type="date" class="form-control" id="fechaSalida"  value="<?php echo date('Y-m-d') ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-12 col-md-6">
                                    <label for="idDestinatario">Destinatario</label>
                                    <select class="form-control" id="idDestinatario" required></select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="idTransportista">Transportista</label>
                                    <select class="form-control" id="idTransportista" required></select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12 col-md-6">
                                    <label>Nombre Empresa Destinataria </label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->nombre ?>" disabled>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label>Dirección Empresa Destinataria</label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->domicilio ?>" id="direccion" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 col-md-6">
                                    <label>Telefono Empresa Destinataria </label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->telefono ?>" id="telefono" disabled>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label>Licencia Ambiental</label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->licencia_ambiental ?>" id="telefono" disabled>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>