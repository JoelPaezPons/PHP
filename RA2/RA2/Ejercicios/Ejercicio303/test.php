<?php

include_once ("303EmpleadoConstructor.php");

$empleado1 = new Empleado("Joel", "Paez");

$empleado1->anyadirTelefono(666111222);

echo $empleado1->getNombreCompleto() . " Sueldo: " . $empleado1->getSueldo(). "<br>";
echo "Teléfonos: " . $empleado1->listarTelefonos() . "<br>";
echo "Después de vaciar: " . $empleado1->listarTelefonos(). "<br><br>";



$empleado2 = new Empleado("Maria", "Tonon", 2500);
$empleado2->anyadirTelefono(987654321);

echo $empleado2->getNombreCompleto() . " Sueldo: " . $empleado2->getSueldo(). "<br>";
echo "Teléfonos: " . $empleado2->listarTelefonos() . "<br>";

$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado2->listarTelefonos();
?>