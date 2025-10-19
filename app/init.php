<?php

require "core/Router.php";

// *** Controllers
require "controllers/PublicController.php";
require "controllers/HomeController.php";

$Route = Router();

$PublicController = function($method) {
    return PublicController($method);
};

$HomeController = function($method) {
    return HomeController($method);
};

// @Structure : $Route.Get(Route, Action);
$Route.Get("/", [$PublicController, "Index"]);

$Route.Get("/login", [$PublicController, "Login"]);

$Route.Post("/login", [$PublicController, "Login"]);

$Route.Get("/home", [$HomeController, "Index"]);

// Router();

// Router("POST", "/public", "");
// Router("PATCH", "/public", PublicController);
// Router("PUT", "/public", PublicController);
// Router("DELETE", "/public", PublicController);