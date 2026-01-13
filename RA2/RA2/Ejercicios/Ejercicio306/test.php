<?php

include_once("306EmpleadoStatic.php");

//Primer Empleado
$empleado1 = new Empleado("Joel", "Paez");
$empleado1->anyadirTelefono(666111222);
echo Empleado::toHtml($empleado1);
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado1->listarTelefonos() . "<br><br>";

//Segundo Empleado
$empleado1 = new Empleado("Maria", "Tonon", 3500);
$empleado1->anyadirTelefono(666111222);
echo Empleado::toHtml($empleado1);
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado1->listarTelefonos() . "<br><br>";


