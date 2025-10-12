<?php

function Controller($url = [])
{
    $parentDirectory = dirname(__DIR__);

    $controller = isset($url[0]) && $url[0] !== "" ? ucfirst($url[0]) : "Home";
    $method = isset($url[1]) && $url[1] !== "" ? $url[1] : "Index";

    $controllerName = $controller . "Controller";
    $controllerPath = realpath("$parentDirectory/controllers/$controllerName.php");

    // ✅ Cek apakah file controller ada
    if (!$controllerPath || !file_exists($controllerPath)) {
        // echo "Error: Controller file '$controllerName.php' not found.";
        $controllerName = "HomeController";
        $controllerPath = realpath("$parentDirectory/controllers/$controllerName.php");
    }

    // Load file controller
    require_once $controllerPath;

    // ✅ Cek apakah function controller ada
    if (!function_exists($controllerName)) {
        echo "Error: Controller function '$controllerName' not found.";
        return;
    }

    // Jalankan controller dengan method
    $controllerName($method);
}
