<?php

class AdminController extends ControllerBase
{
    function dashboard()
    {
        $this->render("admin/dashboard");
    }

    function pdf_manifiesto()
    {
        $this->render("admin/pdf-manifiesto");
    }

    function usuario()
    {
        $this->render("admin/usuario");
    }

    function mostrar_manifiestos(){
        $this->render("admin/manifiesto/index");
    }
}
