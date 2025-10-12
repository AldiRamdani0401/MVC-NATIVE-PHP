<?php

require "Controller.php";

function Router () {
    $url = explode("/", ltrim($_SERVER["REQUEST_URI"], "/"));
    // echo "BASE URL : " . $_SERVER["REQUEST_URI"];
    // echo "<br/>";
    Controller($url);
}