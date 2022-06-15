<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
 

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/sesion.css">
    <link rel="stylesheet" href="../css/landing.css">
</head>

<body>

<?php include("../layout/header.php") ?>

    <div class="container-image">
        <div class="container-formulario justify-content-center">
            <div class="title-form">
                <p>Iniciar Sesión</p>
            </div>
            <div class="container input-group justify-content-center">
                <div class="col-12 form-group">
                    <label for="exampleInputEmail1">Correo Electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com">
                </div>
                <div class="col-12 form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ABC123">
                </div>
                <div class="col-12">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                      </label>
                      <span>Sesión iniciada</span>
                </div>
               
                <div class="col-12 btn-submit">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

                </form>

            </div>
        </div>
    </div>
    <?php include("../layout/footer.php") ?>
</body>

</html>