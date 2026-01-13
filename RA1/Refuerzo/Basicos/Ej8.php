<?php

$ventas = [
    "Enero" => 1500,
    "Febrero" => 1200,
    "Marzo" => 1700,
    "Abril" => 900
];


foreach($ventas as $clave => $valor){
    echo "Mes: $clave, Ganancia: $valor <br>";
}
    echo "Suma:" . array_sum($ventas);


?>
