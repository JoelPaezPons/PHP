<?php

$productos = [
    "laptop" => 1000,
    "tablet" => 600,
    "smartphone" => 800,
    "monitor" => 300
];

asort($productos);

ksort($productos);
foreach ($productos as $clave => $valor) {
    echo "Clave: $clave, Valor: $valor<br>";
}

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