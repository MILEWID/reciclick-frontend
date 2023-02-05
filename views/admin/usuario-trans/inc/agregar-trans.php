<div class="grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Agregar Transportista</h4>
            <p class="card-description">
                Registrar un Usuario Transportista
            </p>
            <form class="forms-sample" id="formAee">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" id="aName" placeholder="Nombre de Ejemplo" required>
                        </div>
                        <div class="form-group">
                            <label>Codigo: </label>
                            <input type="text" class="form-control" id="aCod" placeholder="Código" required>
                        </div>
                        <div class="form-group">
                            <label>Capacidad del Contenedor: </label>
                            <input type="text" class="form-control" id="aCapCon" required>
                        </div>
                        <div class="form-group">
                            <label>Tipo de contenedor:</label>
                            <input type="text" class="form-control" id="aTipo" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Cantidad:</label>
                            <input type="number" class="form-control" id="aCant" required>
                        </div>
                        <div class="form-group">
                            <label>Unidades:</label>
                            <input type="number" class="form-control" id="aUni" required>
                        </div>
                        <div class="form-group">
                            <label>Instalación:</label>
                            <select class="form-control" id="aInstalacion" required>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary mr-2">Agregar nuevo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>