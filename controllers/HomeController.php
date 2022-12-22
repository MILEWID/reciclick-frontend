<?php
class HomeController extends ControllerBase
{
    public function index()
    {
        $this->render('client/home');
    }

    public function contactanos()
    {
        $this->render('client/contactanos');
    }

    public function iniciar_sesion()
    {
        $this->render('client/iniciar-sesion');
    }
}
