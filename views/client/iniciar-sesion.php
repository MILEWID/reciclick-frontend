<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/sesion.css">
    <!-- <link rel="stylesheet" href="../css/nav.css"> -->
</head>

<body>
    <div class="container-image">
        <div class="container-formulario justify-content-center">
            <div class="title-form">
                <a class="login-container-logo" href="<?php echo URL_BASE_APP; ?>">
                    <div class="logo-container">
                        <img class="logo" src="img/logo.png" alt="Reciclick">
                    </div>
                    <span>RECICLICK</span>
                </a>
            </div>
            <form action="" method="POST" id="formLogin">
                <div class="container input-group justify-content-center">
                    <h1 class="title-form-text">Iniciar Sesión</h1>
                    <div class="col-12 form-group">
                        <label for="inputUser"><strong>Nombre de usuario</strong></label>
                        <input type="text" class="form-control" id="inputUser" placeholder="JhonDoe" name="email" required>
                    </div>
                    <div class="col-12 form-group">
                        <label for="inputPwd"><strong>Contraseña</strong></label>
                        <input type="password" class="form-control" id="inputPwd" name="password" placeholder="******" required>
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
                        <button type="submit" id="btnSubmit" class="btn btn-success btn-login">Iniciar sesión</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const url = "<?php echo URL_API_M1 ?>";
        const formLogin = document.getElementById('formLogin');
        formLogin.addEventListener('submit', async function(e) {
            e.preventDefault();
            // this.btnSubmit.setAttribute('disabled', 'true')
            const data = {
                username: this.inputUser.value,
                password: this.inputPwd.value
            }

            try {
                const {
                    data: userLogged
                } = await axios.post(`${url}/auth/login`, data);

                const {
                    data: user
                } = await axios.post('<?php URL_BASE_APP ?>login', userLogged);
                console.log(user);
            } catch (error) {
                Swal.fire(
                    'Credenciales incorrectas',
                    'El usuario o la contraseña no son correctas',
                    'error'
                );
                this.btnSubmit.removeAttribute('disabled')
                this.reset();
            }
        });
    </script>
</body>

</html>