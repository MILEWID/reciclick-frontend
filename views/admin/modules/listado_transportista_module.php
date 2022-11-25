<div class="page-header">
</div>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Listado de transportistas</h4>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Tipo vehiculo</th>
                <th>Placa</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Andres Peralta</td>
                <td>Jefe de transportes</td>
                <td>Camión de carga</td>
                <td>ABC1234</td>
                <td><div class="badge badge-success badge-pill">Activo</div></td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>
                </td>
              </tr>
              <tr>
                <td>Sebastian Zambrano</td>
                <td>transportista</td>
                <td>Camioneta 4x4</td>
                <td>TBX1803</td>
                <td><div class="badge badge-danger badge-pill">Inactivo</div></td>
                <td>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-trash text-danger"></i></button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon p-0"><i class="fas fa-edit text-warning"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Mostrar RAEE del manifiesto   -->
  <div class="modal fade" id="modal-aee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 850px;"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">AEE a transportar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Código del desecho</th>
                  <th>Tipo</th>
                  <th>Capacidad</th>
                  <th>Cantidad total del desecho</th>
                  <th>Unidad volumen/peso</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jacob</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-danger badge-pill">Pending</label></td>
                </tr>
                <tr>
                  <td>Messsy</td>
                  <td>53275532</td>
                  <td>15 May 2017</td>
                  <td>15 May 2017</td>
                  <td>15 May 2017</td>
                  <td><label class="badge badge-warning badge-pill">In progress</label></td>
                </tr>
                <tr>
                  <td>John</td>
                  <td>53275533</td>
                  <td>14 May 2017</td>
                  <td>14 May 2017</td>
                  <td>14 May 2017</td>
                  <td><label class="badge badge-info badge-pill">Fixed</label></td>
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