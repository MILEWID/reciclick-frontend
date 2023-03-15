<div class="page-header">
</div>
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Listado de Manifiestos</h4>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Empresa Generadora </th>
                <th>RAEE a transportar </th>
                <th>Transportista </th>
                <th>Almacenamiento</th>
                <th>Manifiesto </th>
                <th>Acciones </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>EIC1343</td>
                <td>Jose Alfredo </td>
                <td>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#modal-aee">Ver</button>
                  </div>
                </td>
                <td>Jose Chavez </td>
                <td>RINOPLAST </td>
                <td><a href="<?php echo URL_BASE_APP; ?>admin/pdf-manifiesto?p=jajaja&al=bwlksdn" target="_blank">pdf</a></td>
                <td>acciones </td>
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