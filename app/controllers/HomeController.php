<?php

function HomeController ($method = "Index") {
    $parentDirectory = dirname(__DIR__ );
    
    echo "Hello from HomeController";

    // echo "Hello from HomeController, method : $method";
    // echo "<br/>";
    
    require_once realpath("$parentDirectory/core/View.php");
    
    function Index () {
        $data["title"] = "Home Page";
        $data["user"] = "Abdul Wahab";
        $view = "Home";
        $role = "Admin";
        // echo "Hello From Method Index";
        // echo "<br/>";
        // echo $data["title"];
        View($view, $data, $role);
    }

    if (function_exists($method)) {
        $method();
    } else {
        Index();
    }
};