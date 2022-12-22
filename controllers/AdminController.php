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
}
