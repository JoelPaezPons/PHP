<?php

$productos = [
    "laptop" => 1000,
    "tablet" => 600,
    "smartphone" => 800,
    "monitor" => 300
];

asort($productos);
echo "Ordenado por precio ascendente: ";
print_r($productos);

ksort($productos);
echo "Ordenado en orden alfabético: ";
print_r($productos);




?>