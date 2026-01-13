<?php


$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesión" => "Ingeniera"
];

array_splice($persona,1,1);
$persona ["país"] = "España";


foreach($persona as $clave => $valor){
    echo "Clave: $clave ";
    echo "Valor: $valor <br>";
}


?>