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
        $this->render("admin/utransportista/listado-transportista");
    }

    function agregar_transportista()
    {
        $this->render("admin/utransportista/agregar-transportista");
    }

    function editar_transportista()
    {
        $this->render("admin/utransportista/editar-transportista");
    }

}
