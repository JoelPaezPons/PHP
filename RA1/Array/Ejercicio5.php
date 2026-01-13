<?php

$auto = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2018
];

$auto ["color"] = "rojo";

if (isset($auto["color"])) {
    echo "Existe y no es null";
} else {
    echo "No existe o es null";
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