<?php

$ventas = [
    "Juan" => 1500,
    "María" => 2500,
    "Luis" => 900,
    "Ana" => 1700
];

    $ganancias = array_filter ($ventas, function($salary){
        return $salary > 1000;
    });
    print_r($ganancias);

?>