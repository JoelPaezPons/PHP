<?php

include_once("308PersonaH.php");
include_once("308Empleado.php");

// ------------------ Primer Empleado ------------------
$empleado1 = new Empleado("Joel", "Paez");
$empleado1->anyadirTelefono(666111222);
echo Empleado::toHtml($empleado1);
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
$empleado1->vaciarTelefonos();
echo "Después de vaciar: " . $empleado1->listarTelefonos() . "<br><br>";

// ------------------ Segundo Empleado ------------------
$empleado2 = new Empleado("Maria", "Tonon", 3500);
$empleado2->anyadirTelefono(666111222);
echo Empleado::toHtml($empleado2);
echo "Sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo ($empleado2->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
$empleado2->vaciarTelefonos();
echo "Después de vaciar: " . $empleado2->listarTelefonos() . "<br><br>";