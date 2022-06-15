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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/landing.css">
    <link rel="stylesheet" href="../css/sesion.css">
    <!-- <link rel="stylesheet" href="../css/nav.css"> -->
</head>

<body>
    <div class="container-image">
        <div class="container-formulario justify-content-center">
            <div class="title-form">
                <a class="login-container-logo" href="../php/index.php">
                    <div class="logo-container">
                        <img class="logo" src="../img/logo.png" alt="Reciclick">
                    </div>
                    <span>RECICLICK</span>
                </a>
            </div>
            <form>
                <div class="container input-group justify-content-center">
                    <h1 class="title-form-text">Iniciar Sesión</h1>
                    <div class="col-12 form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com">
                    </div>
                    <div class="col-12 form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ABC123">
                    </div>
                    <div class="col-12">
                        <div class="ctn-keep-session">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span class="text-session">Mantener sesión iniciada</span>
                        </div>
                    </div>
                    <div class="ctn-btn-login">
                        <button type="submit" class="btn btn-success btn-login">Iniciar sesión</button>
                    </div>
            </form>

        </div>
    </div>
    </div>
</body>

</html>