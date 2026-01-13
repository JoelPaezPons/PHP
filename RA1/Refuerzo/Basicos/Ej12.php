<?php

    $arrayMultidimensional = [
    "Primer Producto" => [
        "Producto" => "Teclado",
        "Precio" => 30,
        "Cantidad" => 7
    ],
    "Segundo Producto" => [
        "Producto" => "Ratón",
        "Precio" => 15,
        "Cantidad" => 13
    ],
    "Tercer Producto" => [
        "Producto" => "Torre",
        "Precio" => 400,
        "Cantidad" => 3
    ]
];



        foreach($arrayMultidimensional as $producto){
            echo $producto ["Producto"] . " cuesta " . $producto ["Precio"] . " cantidad " . $producto["Cantidad"] . "<br>";
        }

?>