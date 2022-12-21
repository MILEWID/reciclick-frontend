<?php
require_once(__DIR__ . '/core/config.php');
require_once(__DIR__ . '/core/router.php');

$router = new Router();
$router->run();
