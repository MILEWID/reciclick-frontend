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
                  <?php echo $_SESSION["userLoggedRolText"] ?>
               </p>
            </div>
         </div>
      </li>
      <?php
      if (isset($_SESSION["userLoggedRol"])) {
         switch ($_SESSION["userLoggedRol"]) {
            case 1:
               require_once("sidebar-transportista.php");
               break;
            case 2:
               require_once("sidebar-productor.php");
               break;
            case 3:
               require_once("sidebar-destinatario.php");
               break;
            case 4:
               require_once("sidebar-utransportista.php");
               break;
         }
      }
      ?>
   </ul>
</nav>