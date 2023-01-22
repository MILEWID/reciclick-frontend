<div class="row">
   <div class="col-12 grid-margin">
      <div class="card">
         <div class="card-body custom">
            <h4 class="card-title">GENERAR DATOS PARA EL MANIFIESTO PARTE DEL TRANSPORTISTA</h4>
            <form id="example-form-dim" action="#">
               <div class="custom-container">
                  <h3>Datos del Embarque </h3>
                  <section>
                     <div class="form-group">
                        <label>Punto de Salida</label>
                        <input id="inputDirección" type="text" class="form-control" aria-describedby="rucHelp" placeholder="Ingrese el punto de Salida del RAEE">
                     </div>
                     <div class="form-group">
                        <label>Punto de llegada </label>
                        <input type="text" class="form-control"  id="puntoLlegada" placeholder="Ingrese el punto de llegada del RAEE">
                     </div>
                     <div class="row px-2 mb-1">
                        <div class="col-12 col-md-6">
                           <div class="container_map_address" id="myMaps">
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="form-group">
                              <label>Autorizacion </label>
                              <input type="text" class="form-control" id="autorizacion" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Fecha Embarque </label>
                              <input type="text" class="form-control" placeholder="" id="fechaEmbarque">
                           </div>
                           <div class="form-group">
                              <label>Ruta de transporte</label>
                              <input type="text" class="form-control" placeholder="" id="rutaTransporte">
                           </div>
                           <div class="form-group">
                              <label>Carretera</label>
                              <input type="text" class="form-control" placeholder="" id="carretera">
                           </div>
                           <p class="text-address"></p>
                        </div>
                     </div>

                  </section>
                  <h3>Datos de la Empresa </h3>
                  <section>
                     <div class="form-group">
                        <label>Usuario Transportista Representante </label>
                        <select class="form-control" id="idUsuario" required></select>
                     </div>
                     <div class="form-group">
                        <label>Nombre Empresa Tranportista </label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->nombre ?>" disabled>
                     </div>
                     <div class="form-group">
                        <label>Dirección  </label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->domicilio ?>" id="direccion" disabled>
                     </div>
                     <div class="form-group">
                        <label>Telefono </label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION["userLogged"]->usuario->telefono ?>" id="telefono" disabled>
                     </div>
                  </section>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>