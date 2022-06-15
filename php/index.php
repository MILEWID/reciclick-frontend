<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclick</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../css/landing.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-transparent">
        <div class="container-fluid">
            <a class="navbar-brand logo-navbar" href="../php/index.php">
                <div class="logo-container">
                    <img class="logo" src="../img/logo.png" alt="Reciclick">
                </div>
                <span>RECICLICK</span>
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-suc" href="#">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-sesion" href="../php/iniciarsesión.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="header-landing w-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-white">RECICLICK</h1>
        <p> Sistema de Gestión de RAEES para pequeñas, medianas y grandes empresas.</p>
        <button class="btn-principal" href="">CREAR CUENTA</button>
        <p>Encuéntranos en: </p>
        <div>
            <a class="social-networks" target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a class="social-networks" target="_blank" href="https://www.facebook.com/AICADE.2020"><i class="fab fa-facebook-f"></i></a>
            <a class="social-networks" target="_blank" href="https://twitter.com/?lang=es"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </section>
    <!-- Sección de beficios -->
    <section class="container-fluid p-0">
        <div class="custom-container">
            <div class="container-fluid d-flex align-items-center custom-container-child">
                <div class="row pt-3 pt-md-5">
                    <div class="col-12 col-xs-6 col-lg-8 mt-md-5 pt-md-4 text-md-center text-lg-start">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 mt-3 mt-md-0 col-md-5">
                                <div class="benefit-card">
                                    <i class="fa-solid fa-earth-americas"></i>
                                    <h2>Todo en un lugar</h2>
                                    <p>En este sistema se podrá manejar todo
                                        el proceso de gestión de RAEES.</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3 mt-md-0 col-md-5">
                                <div class="benefit-card">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    <h2>Costos accesibles</h2>
                                    <p>El proceso de gestión de RAEES de su
                                        empresa con el menor costo posible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 mt-md-5 d-flex justify-content-center">
                            <div class="col-12 mt-3 mt-md-0 col-md-5">
                                <div class="benefit-card">
                                    <i class="fa-solid fa-circle-notch"></i>
                                    <h2>Transporte</h2>
                                    <p>Gestionamos el transporte de RAEES
                                        desde su empresa al almacenamiento.</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3 mt-md-0 col-md-5">
                                <div class="benefit-card">
                                    <i class="fa-solid fa-warehouse"></i>
                                    <h2>Almacenamiento</h2>
                                    <p>Almacenamos y gestionamos el
                                        aprovechamiento de RAEES.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-5 mt-xs-0 col-xs-6 col-lg-4">
                        <div class="card-sec-2">
                            <div class="card-header-sec-2">
                                <img src="../img/section2.png" alt="">
                            </div>
                            <div class="card-body-sec-2 text-center">
                                <h2 class="card-title-c">¿Necesita más información?</h2>
                                <p class="card-text-c">Estamos a la orden para responder sus dudas acerca de nuestros
                                    servicios.
                                    Si ya es cliente también puede buscarnos por ayuda.</p>
                                <a href="../html/contáctanos.html" class="btn btn-success  text-uppercase">contáctenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="managers-section py-4">
        <div class="container-lg">
            <h2 class="title-manager text-white">Nuestros directivos</h2>
            <p class="p-manager">La empresa está dirigida por profesionales expertos en la gestión y aprovechamiento de
                RAEES.</p>
            <div class="row g-3 mt-2">
                <div class="col-12 col-md-6 mt-4">
                    <div class="manager-card">
                        <div class="manager-card__image">
                            <img src="../img/manager/emma.png" alt="">
                        </div>
                        <div class="manager-card__body">
                            <h3 class="manager_name">Emma Roberts</h3>
                            <span class="manager_position">Gerente</span>
                            <p class="manager_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ornare
                                feugiat malesuada phasellus eu dictum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <div class="manager-card">
                        <div class="manager-card__image">
                            <img src="../img/manager/william.png" alt="">
                        </div>
                        <div class="manager-card__body">
                            <h3 class="manager_name">William Pearce</h3>
                            <span class="manager_position">Consultor ambiental 1</span>
                            <p class="manager_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ornare
                                feugiat malesuada phasellus eu dictum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <div class="manager-card">
                        <div class="manager-card__image">
                            <img src="../img/manager/ivanna.png" alt="">
                        </div>
                        <div class="manager-card__body">
                            <h3 class="manager_name">Ivana Flow</h3>
                            <span class="manager_position">Consultor ambiental 2</span>
                            <p class="manager_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ornare
                                feugiat malesuada phasellus eu dictum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-4">
                    <div class="manager-card">
                        <div class="manager-card__image">
                            <img src="../img/manager/marquez.png" alt="">
                        </div>
                        <div class="manager-card__body">
                            <h3 class="manager_name">Marquez Garcia</h3>
                            <span class="manager_position">Consultor ambiental 3</span>
                            <p class="manager_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Ornare
                                feugiat malesuada phasellus eu dictum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-container">
        <div class="container">
            <div class="patrocinador">
                <img src="../img/patrocinadores.png" alt="">
            </div>
        </div>
        <div class="container mt-5">
            <div class="stadistic-data">
                <div class="item-stadistic">
                    <h3>3,726</h3>
                    <span>empresas</span>
                    <p>incluidas en el sistema de gestión de RAEES.</p>
                </div>
                <div class="item-stadistic">
                    <h3>2,332+</h3>
                    <span>Toneladas</span>
                    <p>de RAEES gestionado desde las
                        empresas hacia almacenamiento.</p>
                </div>
                <div class="item-stadistic">
                    <h3>22/7</h3>
                    <span>soporte</span>
                    <p>con profesionales capacitados para resolver sus dudas.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("../layout/footer.php");
    ?>
</body>

</html>