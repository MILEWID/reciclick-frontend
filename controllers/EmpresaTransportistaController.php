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
    
    function listado_transportista()
    {
        $this->render("admin/listado-transportista");
    }

}
