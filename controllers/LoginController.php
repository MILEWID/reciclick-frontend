<?php
class LoginController
{
    function __construct()
    {
    }

    public function iniciar()
    {
        try {
            if (isset($_POST["session_info"]) && $_POST["session_info"] != "") {
                $userLogged = $_POST["session_info"];
                $userLogged = json_decode($userLogged);
                setcookie("jwt", $userLogged->token, 3600 * 24 * 1);
                $_SESSION["userLoggedRol"] = $userLogged->usuario->id_tipo;
                $_SESSION["userLoggedToken"] = $userLogged->token;
                $_SESSION["userLogged"] = $userLogged;
                header('location: ' . URL_BASE_APP . 'admin/dashboard');
            }
        } catch (\Throwable $th) {
            $_SESSION["message_login"] = "Hubo un error, inténtalo de nuevo: " . $th->getMessage();
        }
    }

    private function redireccionarPorRol($rol)
    {
    }
}
