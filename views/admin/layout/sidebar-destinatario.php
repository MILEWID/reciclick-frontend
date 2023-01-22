<li class="nav-item <?php echo $pagina == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="<?php echo URL_BASE_APP; ?>admin/dashboard">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Administracion</span>
    </a>
</li>
<li class="nav-item <?php echo $pagina == 'usuario' ? 'active' : '' ?>">
    <a class="nav-link " href="<?php echo URL_BASE_APP; ?>admin/usuario">
        <i class="fa fa-user menu-icon"></i>
        <span class="menu-title">Tu cuenta </span>
    </a>
</li>
<li class="nav-item <?php echo $pagina == 'datos-empresa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?php echo URL_BASE_APP; ?>admin/informacion-empresa">
        <i class="fa fa-building menu-icon"></i>
        <span class="menu-title">Datos Empresa</span>
    </a>
</li>
<li class="nav-item d-none d-lg-block">
    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
        aria-controls="sidebar-layouts">
        <i class="fas fa-clipboard-list menu-icon"></i>
        <span class="menu-title">Manifiesto</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item <?php echo $pagina == 'manifiesto-unico' ? 'active' : '' ?>"> <a class="nav-link"
                    href="<?php echo URL_BASE_APP; ?>admin/mostrar-manifiestos">Listado de manifiestos</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo URL_BASE_APP; ?>empresa-destinataria/llenar_datos_destinatario">Generar Manifiesto</a>
            </li>
        </ul>
    </div>
</li>
