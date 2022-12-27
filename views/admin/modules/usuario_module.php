<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Datos del Usuario</h4>
            <label for="">Foto de perfil</label>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-9">
                        <input type="file" name="" id="inputFilePhoto" hidden="hidden" accept="image/*">
                        <div class="container-photo-profile">
                            <div class="pictureUser">
                                <img src="<?php echo URL_BASE_APP; ?>img/manager/marquez.png" alt="">
                            </div>
                            <button class="buttonChangePicture" id="changePhotoProfile">
                                <img src="<?php echo URL_BASE_APP; ?>img/camera.png" alt="camara icon">
                            </button>
                        </div>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" id="changePhotoProfile2">Cambiar foto</button>
                    </div>
                </div>
            </div>
            <form class="forms-sample" id="formUsuario">
                <div class="form-group border-top pt-4">
                    <label for="exampleInputConfirmPassword1">Rol</label>
                    <div class="row">
                        <div class="col-9">
                            <input disabled type="text" class="form-control" id="inputNames" placeholder="Empresa Transportista">
                        </div>
                    </div>
                </div>
                <div class="form-group border-top pt-4">
                    <label for="inputNames">Nombre</label>
                    <div class="row">
                        <div class="col-9">
                            <input disabled type="text" class="form-control" id="inputNames" placeholder="Raul Gonsalez">
                        </div>
                        <div class="col-3">
                            <button type="button" data-action-button="edit" class="btn btn-primary ">editar</button>
                        </div>
                    </div>
                </div>
                <div class="form-group border-top pt-4">
                    <label for="inputEmail">Email</label>
                    <div class="row">
                        <div class="col-9">
                            <input disabled type="email" class="form-control" id="inputEmail" placeholder="rgonzales@gmail.com">
                        </div>
                        <div class="col-3">
                            <button type="button" data-action-button="edit" class="btn btn-primary ">editar</button>
                        </div>
                    </div>

                </div>
                <div class="form-group border-top pt-4">
                    <label for="inputPassword">Contraseña</label>
                    <div class="row">
                        <div class="col-9">
                            <input disabled type="password" class="form-control" id="inputPassword" placeholder="*******">
                        </div>
                        <div class="col-3">
                            <button type="button" data-action-button="edit" class="btn btn-primary ">editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>