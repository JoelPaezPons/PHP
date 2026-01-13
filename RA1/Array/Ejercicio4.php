<?php

$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesión" => "Ingeniera",
];

$persona["país"] = "España";

unset($persona["edad"]);

foreach ($persona as $clave => $valor) {
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