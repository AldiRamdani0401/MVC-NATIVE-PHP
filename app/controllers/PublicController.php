<?php

function PublicController ($method = "Index") {
    $parentDirectory = dirname(__DIR__ );
    
    require_once realpath("$parentDirectory/core/View.php");
    
    function Index () {
        $data["title"] = "MVC Native";
        $view = "Home";
        $role = "Public";
        View($view, $data, $role);
    }
    function Login () {
        $data["title"] = "MVC Native | Login";
        $view = "Login";
        $role = "Public";
        View($view, $data, $role);
    }

    if (function_exists($method)) {
        $method();
    } else {
        Index();
    }
};