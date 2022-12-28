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
                $optCookie = ['expires' => time() + 60 * 60 * 24 * 1, 'path' => '/'];
                $userLogged = $_POST["session_info"];
                $userLogged = json_decode($userLogged);

                $foto = "https://cdn-icons-png.flaticon.com/512/149/149071.png";
                if ($userLogged->usuario->foto_url) {
                    $foto = $userLogged->usuario->foto_url;
                }

                $tipo = "Empresa Transportista";
                switch ($userLogged->usuario->id_tipo) {
                    case 2: $tipo = "Empresa Productora"; break;
                    case 3: $tipo = "Empresa Destinataria"; break;
                    case 4: $tipo = "Transportista"; break;
                }

                setcookie("jwt", $userLogged->token, $optCookie);
                $_SESSION["userLoggedProfile"] = $foto;
                $_SESSION["userLoggedToken"] = $userLogged->token;
                $_SESSION["userLoggedRol"] = $userLogged->usuario->id_tipo;
                $_SESSION["userLoggedRolText"] = $tipo;

                unset($userLogged->token);
                $_SESSION["userLogged"] = $userLogged;

                header('location: ' . URL_BASE_APP . 'admin/dashboard');
            }
        } catch (\Throwable $th) {
            $_SESSION["message_login"] = "Hubo un error, inténtalo de nuevo: " . $th->getMessage();
        }
    }

    public function cerrar_session()
    {
        $optCookie = ['expires' => time() - 60, 'path' => '/'];
        setcookie("jwt", "", $optCookie);
        session_destroy();
        header('location: ' . URL_BASE_APP . '/iniciar-sesion');    
    }

    private function redireccionarPorRol($rol)
    {
    }
}
