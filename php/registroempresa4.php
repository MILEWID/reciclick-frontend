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
    <link rel="stylesheet" href="../css/registrate.css">
    <link rel="stylesheet" href="../css/landing.css">
</head>

<body>

    <div class="container-registro">
        <div class="row">
            <div class="col-12 col-md-5 col-sm-4 col-xs- container-image">
            </div>
            <div class="col-12 col-md-7 col-sm-8">
                <form action="">
                    <div class="container py-5">
                        <div class="row py-2">
                            <div class="col-lg-12 ">
                                <div class="mb-4">
                                    <h1>Responsables de la empresa</h1>
                                </div>
                                <div class="row ">

                                    <div class="input-group input-group-static mb-4">
                                        <label>Nombre del responsable de la empresa: </label>
                                        <input class="form-control" placeholder="José Pérez" type="text">
                                    </div>



                                </div>

                                <div class="row ">

                                    <div class="input-group input-group-static mb-4">
                                        <label>Teléfono:</label>
                                        <input class="form-control" placeholder="031234567" type="text">
                                    </div>
                                </div>

                                <div class="row ">

                                    <div class="input-group input-group-static mb-4">
                                        <label>Cargo:</label>
                                        <input class="form-control" placeholder="Gerente" type="text">
                                    </div>
                                </div>

                            </div>

                            <div class="form-check form-switch mb-4 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                                    <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">Acepto los <a href="javascript:;" class="text-dark"><u>Términos y Condiciones</u></a>.</label>
                                </div>
                                <div class="col-lg-6 justify-content-center flex">
                                    <button type="submit" class="btn btn-success w-100">Finalizar registro</button>
                                </div>
                        </div>
                    </div>
            </div>
            </form>

        </div>
    </div>
    </div>
    <script src="../javascript/register.js"></script>
</body>

</html>