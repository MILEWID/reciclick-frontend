<div class="card">
    <div class="card-body">
        <h4 class="card-title">Registrar manifiesto</h4>
        <p class="card-description">
            parte uno
        </p>
        <form id="formRegistrarManifiestoP1">
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
                <div class="col-12 mb-4 col-md-6 m-md-0">
                    <label for="numPagina">Página</label>
                    <input type="number" class="form-control" id="numPagina" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="numIntrucciones">Instrucciones especiales</label>
                    <input type="text" class="form-control" id="numIntrucciones" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 mb-4 col-md-6 m-md-0">
                    <label for="nombreProductor">Nombre productor</label>
                    <input type="text" class="form-control" id="nombreProductor" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="cargoProductor">Cargo productor</label>
                    <input type="text" class="form-control" id="cargoProductor" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 mb-4 col-md-6 m-md-0">
                    <label for="correoProductor">Correo productor</label>
                    <input type="email" class="form-control" id="correoProductor" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="telefonoProductor">Teléfono productor</label>
                    <input type="tel" class="form-control" id="telefonoProductor" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 mb-4 col-md-6 m-md-0">
                    <label for="numResolutivo">Número resolutivo</label>
                    <input type="number" class="form-control" id="numResolutivo" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="fechaSalida">Fecha salida</label>
                    <input type="datetime-local" class="form-control" id="fechaSalida" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 mb-4 col-md-6 m-md-0">
                    <label for="idInstalacion">Instalacion</label>
                    <select class="form-control" id="idInstalacion" required></select>
                </div>
                <div class="col-12 col-md-6">
                    <label for="idDestinatario">Destinatario</label>
                    <input type="number" class="form-control" id="idDestinatario" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 col-md-6">
                    <label for="idTransportista">Transportista</label>
                    <input type="number" class="form-control" id="idTransportista" required>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Registrar manifiesto</button>
            </div>
        </form>
    </div>
</div>