<?php
// require "Controller.php";

function Router() {
    // *** GET
     function Get($route, $action) {
        $url = $_SERVER["REQUEST_URI"];
        $path = $route;

        if ($_SERVER['REQUEST_METHOD'] === "GET" && $url === $path) {
            if (is_array($action) && count($action) === 2){
                $controllerFactory = $action[0];
                $method = $action[1];

                return $action[0]($method);
            }
        } else {
            return "Not Found";
        }
    };
    // *** POST
    function Post($route, $action) {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && $url === $path) {
            echo "POST jalan..";
        }
    };    
}

// require "Controller.php";

// function Router () {
//     $url = explode("/", ltrim($_SERVER["REQUEST_URI"], "/"));
//     // echo "BASE URL : " . $_SERVER["REQUEST_URI"];
//     // echo "<br/>";
//     Controller($url);
// }