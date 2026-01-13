<?php

$auto = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2018
];


$auto ["color"] = "rojo";

foreach($auto as $clave => $valor){
    echo "Clave: $clave ";
    echo "Valor: $valor <br>";
}

if(isset($auto ["color"])){
    echo "colo si existe";
}else{
    echo "color no existe";
}

?>