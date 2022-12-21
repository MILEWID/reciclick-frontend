<?php
class LoginController
{
    function __construct()
    {
    }

    public static function login($userLogged)
    {
        setcookie('token', $userLogged->token);
    }
}
