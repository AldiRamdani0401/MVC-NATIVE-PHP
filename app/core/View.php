<?php

function View ($view, $data, $role) {
    // echo "Hello From View, View : $view";
    // var_dump($data);
    // echo $data["title"];

    $parentDirectory = dirname(__DIR__ );

    require_once realpath("$parentDirectory/views/$role/Header.php");
    require_once realpath("$parentDirectory/views/$role/$view.php");
    require_once realpath("$parentDirectory/views/$role/Footer.php");
}