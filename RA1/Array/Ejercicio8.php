<?php

$ventas = [
    "Enero" => 1500,
    "Febrero" => 1200,
    "Marzo" => 1700,
    "Abril" => 900
];

$totalVentas = array_sum($ventas);

foreach ($ventas as $clave => $valor) {
    echo "Clave: $clave, Valor: $valor<br>";
}
echo "El total de ventas es $totalVentas";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>