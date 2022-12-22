<?php
class LoginController
{
    function __construct()
    {
    }

    public function iniciar()
    {
        var_dump($_POST);
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $json = file_get_contents('php://input');
        //     $json = json_decode($json);
        //     $_SESSION
        //     setcookie('jwt', $json->token, time() + (3600 * 24));

        // } else {
        //     echo json_encode(["status" => 400, "message" => "method not allowed"]);
        //     http_response_code(400);
        // }
    }
}
