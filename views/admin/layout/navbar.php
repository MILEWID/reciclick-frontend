<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
   <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index-2.html"><img src="<?php echo URL_BASE_APP ?>img/logo-texto2.png" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?php echo URL_BASE_APP ?>img/logo.png" alt="logo" /></a>
   </div>
   <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
         <span class="fas fa-bars"></span>
      </button>
    
      <ul class="navbar-nav navbar-nav-right">

         <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               <img src="<?php echo $_SESSION["userLoggedProfile"] ?>" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
               <div class="dropdown-divider"></div>
               <a href="<?php echo URL_BASE_APP."/login/cerrar_session" ?>" class="dropdown-item">
                  <i class="fas fa-power-off text-primary"></i>
                  Cerrar Sesión
               </a>
            </div>
         </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
         <span class="fas fa-bars"></span>
      </button>
   </div>
</nav>