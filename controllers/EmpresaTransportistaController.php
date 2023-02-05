<?php

class EmpresaTransportistaController extends ControllerBase
{
    function index()
    {
    }

    function informacion_empresa()
    {
        $this->render("admin/informacion-empresa");
    }

    function mostrar_manifiestos()
    {
        $this->render("admin/mostrar-manifiestos");
    }
    
    function llenar_datos_transportista()
    {
        $this->render("admin/llenar-datos-transportista");
    }
    
    function trans()
    {
        $this->render("admin/usuario-trans/trans");
    }

    function addtrans(){
        $this->render("admin/usuario-trans/agregar-trans");
    }

    function editatrans(){
        $this->render("admin/usuario-trans/editar-trans");
    }

}
