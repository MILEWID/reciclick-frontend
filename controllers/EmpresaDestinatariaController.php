<?php

class EmpresaDestinatariaController extends ControllerBase
{
    function index()
    {
    }


    function mostrar_manifiestos()
    {
        $this->render("admin/mostrar-manifiestos");
    }
    
    function llenar_datos_destinatario()
    {
        $this->render("admin/llenar-datos-destinatario");
    }
    
}
