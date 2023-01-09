<div class="page-header">
</div>
<div class="card">
  <div class="card-body">
    <h4 class="card-title " style="text-transform: none;">Listado de AEE por Instalación</h4>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="tablaAEE" class="table">
            <thead>
              <tr>
                <th>Id AEE:</th>
                <th>Instalacion:</th>
                <th>Nombre:</th>
                <th>Código: </th>
                <th>Capacidad Contenedor:</th>
                <th>Tipo Contenedor:</th>
                <th>Cantidad</th>
                <th>Unidades </th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="tablaBodyAee">
              <!-- <tr>
                <td>Andres Peralta</td>
                <td>Jefe de transportes</td>
                <td>Camión de carga</td>
                <td>ABC1234</td>
                <td>ABC123kjh4</td>
                <td>ABC12kjh34</td>
                <td>A234</td>
                <td><div class="badge badge-success badge-pill">Activo</div></td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Mostrar RAEE del manifiesto   -->
  <div class="modal fade" id="modal-aee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 850px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">AEE a transportar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table" id="tabla-aee">
              <thead>
                <tr>
                  <th>Id AEE:</th>
                  <th>Instalacion:</th>
                  <th>Nombre:</th>
                  <th>Código: </th>
                  <th>Capacidad Contenedor:</th>
                  <th>Tipo Contenedor:</th>
                  <th>Cantidad</th>
                  <th>Unidades </th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody id="cuerpo-aee">
                <tr>
                  <td>Andres Peralta</td>
                  <td>Jefe de transportes</td>
                  <td>Camión de carga</td>
                  <td>ABC1234</td>
                  <td>ABC123kjh4</td>
                  <td>ABC12kjh34</td>
                  <td>A234</td>
                  <td>
                    <div class="badge badge-success badge-pill">Activo</div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>