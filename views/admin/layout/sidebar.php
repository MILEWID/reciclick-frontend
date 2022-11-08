<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item nav-profile">
         <div class="nav-link">
            <div class="profile-image">
               <img src="../img/manager/marquez.png" alt="image" />
            </div>
            <div class="profile-name">
               <p class="name">
                  Bienvenido Raul
               </p>
               <p class="designation">
                  <?php
                  switch ($_SESSION["rol"]) {
                     case 1:
                        echo "Usuario administrador";
                        break;
                     case 2:
                        echo " Empresa Transportista";
                        break;
                  }
                  ?>
               </p>
            </div>
         </div>
      </li>
      <?php
      if (isset($_SESSION["rol"])) {
         switch ($_SESSION["rol"]) {
            case 1:
               require_once("sidebar-admin.php");
               break;
            case 2:
               require_once("sidebar-transportista.php");
               break;
         }
      }
      ?>
   </ul>
</nav>