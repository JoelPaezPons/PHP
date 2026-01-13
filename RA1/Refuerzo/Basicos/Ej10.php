<?php

$estudiantes = [
    "001" => "Laura",
    "002" => "Carlos",
    "003" => "Marta"
];

$calificaciones = [
    "001" => 85,
    "002" => 92,
    "003" => 78
];

    $arrayCombinado = [];

    foreach($estudiantes as $clave => $valor){
        $arrayCombinado[$clave] = [
            "nombre" => $valor,
            "calificacion" => $calificaciones[$clave]
        ];
    }

    echo "<pre>";
    print_r($arrayCombinado);
    echo "</pre>";
?>

?>