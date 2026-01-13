<?php

include_once("305EmpleadoSueldo.php");

//Primer Empleado
$empleado1 = new Empleado("Joel", "Paez");
$empleado1->anyadirTelefono(666111222);

echo $empleado1->getNombreCompleto() . "<br>";
echo "Sueldo: " . $empleado1->getSueldo() . "<br>";
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
echo "Teléfonos: " . $empleado1->listarTelefonos() . "<br>";

$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado1->listarTelefonos() . "<br><br>";


//Segundo Empleado
$empleado2 = new Empleado("Maria", "Tonon", 3500);
$empleado2->anyadirTelefono(987654321);

echo $empleado2->getNombreCompleto() . "<br>";
echo "Sueldo: " . $empleado2->getSueldo() . "<br>";
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado2->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
echo "Teléfonos: " . $empleado2->listarTelefonos() . "<br>";

$empleado2->vaciarTelefonos();
echo "Después de vaciar: " . $empleado2->listarTelefonos();
