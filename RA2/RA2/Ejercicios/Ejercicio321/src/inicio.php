<?php

include_once __DIR__ . "Ejercicio321/src/Modelo/soporte.php";
use App\Modelo\Soporte;

$soporte1 = new Soporte("Tenet", 22, 3); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
$soporte1->muestraResumen();




// include "Dvd.php"; 

// $miDvd = new Dvd("Origen", 24, 15.0, "Español, Inglés", "16:9"); 

// echo "<h1>Detalles del Soporte</h1>";

// $miDvd->muestraResumen();

?>