<?php
use Modelo\Ejercicio323\Soporte;
use Modelo\Ejercicio323\Dvd;
use Modelo\Ejercicio323\Juego;
require_once("juego.php");

$miJuego = new Juego("PS4", 26, 49.99,  "The Last of Us Part II", 7, 10   ); 
echo "<strong>" . $miJuego->titulo . "</strong>"; 
echo "<br>Precio: " . $miJuego->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIva() . " euros";
$miJuego->muestraResumen();

?>