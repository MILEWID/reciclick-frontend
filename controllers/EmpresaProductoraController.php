<?php

class EmpresaProductoraController extends ControllerBase
{
    function index()
    {
    }

    function aee()
    {
        $this->render("admin/aee");
    }
    // la ruta debe ir el nombre d ela funcion
    function addaee(){
        $this->render("admin/agregar-aee");
    }

    function editaaee(){
        $this->render("admin/editar-aee");
    }

}
