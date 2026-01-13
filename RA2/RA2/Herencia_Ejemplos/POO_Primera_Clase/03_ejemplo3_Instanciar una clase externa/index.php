<?php

require("coche.php");

//Titulo
echo "Ejemplo 3: Instanciar una clase extrena <br>";

//Instancio y configuro los coches
$coche1 = new coche("Seat", "Leon", "Rojo", "Joel", "Electrico");

$coche2 = new coche("Clio", "Master", "Azul", "Daniel", "Gasolina");


echo "{$coche1->getpropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getmodelo()} de color {$coche1->getcolor()} y es {$coche1->getTipo()}. <br>";

echo "{$coche2->getpropietario()} se ha comprado un {$coche2->getMarca()} {$coche2->getmodelo()} de color {$coche2->getcolor()} y es {$coche2->getTipo()}.";
