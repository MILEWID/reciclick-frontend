<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/landing.css">
    <link rel="stylesheet" href="../css/contactos.css">

    <title>Contáctanos</title>
</head>
<body>
<?php 
include("../layout/header.php");
?>
    <section>
        <div class="container py-4">
        <div class="row">
          <div class="col-6">
            <div class=" mx-auto d-flex justify-content-center flex-column">
              <h3 class="text-center">Contáctanos   </h3>
              <form role="form" id="contact-form" method="post" autocomplete="off">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" aria-label="First Name..." type="text" >
                      </div>
                    </div>
                    <div class="col-md-6 ps-2">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="input-group mb-4 input-group-static">
                    <label>Tu mensaje</label>
                    <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-check form-switch mb-4 d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                        <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">Estoy de acuerdo con los  <a href="javascript:;" class="text-dark"><u>Terminos y Conditiones</u></a>.</label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success w-100">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-6 container-contactos">
            <img  class ="img-contactos"src="../img/contáctanos.jpg" alt="">
          </div>
        </div>
        </div>
      </section>
      <?php 
   include("../layout/footer.php");
   ?>
</body>
</html>