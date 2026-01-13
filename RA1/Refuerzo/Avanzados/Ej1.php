<?php

$empleados = [
    ["nombre" => "Carlos", "posición" => "Desarrollador", "departamento" => "IT"],
    ["nombre" => "Ana", "posición" => "Diseñadora", "departamento" => "Marketing"],
    ["nombre" => "Luis", "posición" => "Analista", "departamento" => "IT"],
    ["nombre" => "Marta", "posición" => "Jefa de Producto", "departamento" => "Ventas"]
];

$grupos = [];

foreach ($empleados as $empleado) {
    $departamento = $empleado["departamento"];
    

    $grupos[$departamento][] = $empleado;
}

foreach ($grupos as $departamento => $listaEmpleados) {
    echo "$departamento:<br>";
    
    foreach ($listaEmpleados as $empleado) {
        echo "- " . $empleado["nombre"] . ", " . $empleado["posición"] . "<br>";
    }

    echo "<br>";
}
?>