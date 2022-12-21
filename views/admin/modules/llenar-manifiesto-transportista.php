<div class="row">
   <div class="col-12 grid-margin">
      <div class="card">
         <div class="card-body custom">
            <h4 class="card-title">GENERAR DATOS PARA EL MANIFIESTO </h4>
            <form id="example-form-dim" action="#">
               <div class="custom-container">
                  <h3>Datos del Embarque </h3>
                  <section>
                     <div class="form-group">
                        <label>Punto de Salida</label>
                        <input type="text" class="form-control" aria-describedby="rucHelp" placeholder="Ingrese el punto de Salida del RAEE">
                        <small id="rucHelp" class="form-text text-muted">Este va a ser un texto de ayuda</small>
                     </div>
                     <div class="form-group">
                        <label>Punto de llegada </label>
                        <input type="text" class="form-control" placeholder="Ingrese el punto de llegada del RAEE">
                     </div>
                     <div class="row px-2 mb-1">
                        <div class="col-12 col-md-6">
                           <div class="container_map_address" id="myMaps">
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="form-group">
                              <label>Autorizacion </label>
                              <input type="text" class="form-control" id="inputDirección" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Fecha Embarque </label>
                              <input type="text" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Ruta de transporte</label>
                              <input type="text" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Carretera</label>
                              <input type="text" class="form-control" placeholder="">
                           </div>
                           <p class="text-address"></p>
                        </div>
                     </div>

                  </section>
                  <h3>Datos del Productor</h3>
                  <section>
                     <div class="form-group">
                        <label>Nombre del representante</label>
                        <input type="text" class="form-control" placeholder="Jhon Doe">
                     </div>
                     <div class="form-group">
                        <label>Cargo</label>
                        <input type="text" class="form-control" placeholder="Transportista">
                     </div>
                     <div class="form-group">
                        <label>Teléfono principal</label>
                        <input type="tel" class="form-control" placeholder="(+593) 987654321">
                     </div>
                  </section>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>