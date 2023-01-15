<?php

class EmpresaProductoraController extends ControllerBase
{
    function index()
    {
    }

    function aee()
    {
        $this->render("admin/aee/aee");
    }
    // la ruta debe ir el nombre d ela funcion
    function addaee(){
        $this->render("admin/aee/agregar-aee");
    }

    function editaaee(){
        $this->render("admin/aee/editar-aee");
    }

    function registrar_manifiesto(){
        $this->render('admin/manifiesto/generarp1');
    }

}
