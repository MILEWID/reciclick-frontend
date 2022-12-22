<?php
class ControllerBase
{
    protected function render($path, $parameters = [], $layout = '')
    {
        require_once(__DIR__ . '/../views/' . $path . '.php');
    }
}
