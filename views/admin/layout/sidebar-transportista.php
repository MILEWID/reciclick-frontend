<li class="nav-item <?php echo $pagina == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="<?php echo URL_BASE_APP; ?>admin/dashboard">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Administración</span>
    </a>
</li>
<li class="nav-item <?php echo $pagina == 'usuario' ? 'active' : '' ?>">
    <a class="nav-link " href="<?php echo URL_BASE_APP; ?>admin/usuario">
        <i class="fa fa-user menu-icon"></i>
        <span class="menu-title">Tu cuenta</span>
    </a>
</li>
<li class="nav-item <?php echo $pagina == 'datos-empresa' ? 'active' : '' ?>">
    <a class="nav-link" href="<?php echo URL_BASE_APP; ?>admin/informacion-empresa">
        <i class="fa fa-building menu-icon"></i>
        <span class="menu-title">Datos de la Empresa</span>
    </a>
</li>
<li class="nav-item d-none d-lg-block">
    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
        aria-controls="sidebar-layouts">
        <i class="fas fa-clipboard-list menu-icon"></i>
        <span class="menu-title">Manifiesto Único</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="sidebar-layouts">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item <?php echo $pagina == 'manifiesto-unico' ? 'active' : '' ?>"> <a class="nav-link"
                    href="<?php echo URL_BASE_APP; ?>admin/mostrar-manifiestos">Listado de manifiestos</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Generar Manifiesto</a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="far fa-user menu-icon"></i>
        <span class="menu-title">Transportistas</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Listado de
                    Transportistas</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Agregar Transportista</a>
            </li>
        </ul>
    </div>
</li>