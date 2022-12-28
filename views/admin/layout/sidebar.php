<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <ul class="nav">
      <li class="nav-item nav-profile">
         <div class="nav-link">
            <div class="profile-image">
               <img src="<?php echo $_SESSION["userLoggedProfile"] ?>" alt="image" />
            </div>
            <div class="profile-name">
               <p class="name">
                  Bienvenido Raul
               </p>
               <p class="designation">
                  <?php
                  switch ($_SESSION["userLoggedRol"]) {
                     case 1:
                        echo "Empresa transportista";
                        break;
                     case 2:
                        echo "Empresa productora";
                        break;
                     case 3:
                        echo "Empresa destinataria";
                        break;
                     case 4:
                        echo "Transportista";
                        break;
                  }
                  ?>
               </p>
            </div>
         </div>
      </li>
      <?php
      if (isset($_SESSION["userLoggedRol"])) {
         switch ($_SESSION["userLoggedRol"]) {
            case 2:
               require_once("sidebar-productor.php");
               break;
            case 1:
               require_once("sidebar-transportista.php");
               break;
         }
      }
      ?>
   </ul>
</nav>