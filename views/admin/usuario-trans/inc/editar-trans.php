<div class="grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Editar AEE</h4>
            <p class="card-description">
                Editar Aparato Eléctrico y Electrónico
            </p>
            <form class="forms-sample" id="formAee">
                <div class="row">

                    <input type="hidden" name="" id="idAee" value="<?php echo $_GET["id"] ?? "" ?>">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" id="aName" placeholder="Nombre de Ejemplo ">
                        </div>
                        <div class="form-group">
                            <label>Codigo: </label>
                            <input type="text" class="form-control" id="aCod" placeholder="Código">
                        </div>
                        <div class="form-group">
                            <label>Capacidad del Contenedor: </label>
                            <input type="text" class="form-control" id="aCapCon">
                        </div>
                        <div class="form-group">
                            <label>Tipo de contenedor:</label>
                            <input type="text" class="form-control" id="aTipo">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Cantidad:</label>
                            <input type="number" class="form-control" id="aCant">
                        </div>
                        <div class="form-group">
                            <label>Unidades:</label>
                            <input type="number" class="form-control" id="aUni">
                        </div>
                        <div class="form-group">
                            <label>Instalación:</label>
                            <select class="form-control" id="aInstalacion" required>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary mr-2">Editar AEE</button>
                </div>
            </form>
        </div>
    </div>
</div>