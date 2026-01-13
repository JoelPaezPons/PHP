<?php

$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesión" => "Ingeniera"
];

    $persona ["profesión"] = "Desarrolladora Web";

    foreach($persona as $clave => $Valor){
        echo "Clave: $clave ";
        echo "Valor: $Valor <br>";
    }


?>