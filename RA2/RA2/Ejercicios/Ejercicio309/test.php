<?php

include_once("309PersonaE.php");
include_once("309Empleado.php");

// ------------------ Primer Empleado ------------------
$empleado1 = new Empleado("Joel", "Paez", 20, 2000); // edad = 20, sueldo = 2000
$empleado1->anyadirTelefono(666111222);

// Mostrar HTML del empleado
echo Empleado::toHtml($empleado1);

// Sueldo y comprobación de impuestos
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";

// Vaciar teléfonos
$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado1->listarTelefonos() . "<br><br>";

// ------------------ Segundo Empleado ------------------
$empleado2 = new Empleado("Maria", "Tonon", 30, 3500); // edad = 30, sueldo = 3500
$empleado2->anyadirTelefono(666111222);

// Mostrar HTML del empleado
echo Empleado::toHtml($empleado2);

// Sueldo y comprobación de impuestos
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado2->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";

// Vaciar teléfonos
$empleado2->vaciarTelefonos();
echo "Después de vaciar: " . $empleado2->listarTelefonos() . "<br><br>";

// ------------------ Persona normal ------------------
$persona = new Persona("Ana", "Gomez", 25);
echo Persona::toHtml($persona);