<?php
class ControllerBase
{
    function __construct()
    {
        $this->revalidate_session();
    }
    protected function render($path, $parameters = [], $layout = '')
    {
        require_once(__DIR__ . '/../views/' . $path . '.php');
    }

    protected function revalidate_session()
    {
        if (isset($_COOKIE["jwt2"])) {
            $optCookie = ['expires' => time() + 60 * 60 * 24 * 1, 'path' => '/'];
            $userLogged = $_COOKIE["jwt2"];
            $userLogged = json_decode($userLogged);

            // $foto = "https://cdn-icons-png.flaticon.com/512/149/149071.png";
            // if ($userLogged->usuario->foto_url) {
            //     $foto = $userLogged->usuario->foto_url;
            // }

            $tipo = "Empresa Transportista";
            switch ($userLogged->usuario->id_tipo) {
                case 2:
                    $tipo = "Empresa Productora";
                    break;
                case 3:
                    $tipo = "Empresa Destinataria";
                    break;
                case 4:
                    $tipo = "Transportista";
                    break;
            }

            setcookie("jwt", $userLogged->token, $optCookie);
            // $_SESSION["userLoggedProfile"] = $foto;
            $_SESSION["userLoggedToken"] = $userLogged->token;
            $_SESSION["userLoggedRol"] = $userLogged->usuario->id_tipo;
            $_SESSION["userLoggedRolText"] = $tipo;

            unset($userLogged->token);
            $_SESSION["userLogged"] = $userLogged;
            setcookie("jwt2", "", ['expires' => time() - 60, 'path' => '/']);
        }
    }
}
