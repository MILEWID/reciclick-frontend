<?php
$json = file_get_contents('php://input');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = json_decode($json);
    require_once('controllers/login.controller.php');
    LoginController::login($json);
} else {
    echo json_encode(["status" => 400, "message" => "method not allowed"]);
    http_response_code(400);
}
