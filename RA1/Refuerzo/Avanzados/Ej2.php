<?php

$ventas = [
    ["tienda" => "Madrid", "producto" => "Laptop", "cantidad" => 5],
    ["tienda" => "Madrid", "producto" => "Tablet", "cantidad" => 3],
    ["tienda" => "Barcelona", "producto" => "Laptop", "cantidad" => 2],
    ["tienda" => "Madrid", "producto" => "Smartphone", "cantidad" => 8],
    ["tienda" => "Barcelona", "producto" => "Smartphone", "cantidad" => 4]
];

foreach($ventas as $clave){
    echo  $ventas["tienda"] . "<br>";
}


?>