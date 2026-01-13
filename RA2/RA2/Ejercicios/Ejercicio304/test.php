<?php

include_once ("304EmpleadoConstante.php");

$empleado1 = new Empleado("Joel", "Paez");

$empleado1->anyadirTelefono(666111222);

echo $empleado1->getNombreCompleto() . "<br>";
echo " Sueldo: " . $empleado1->getSueldo(). "<br>";
echo ($empleado1->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>";
echo "Teléfonos: " . $empleado1->listarTelefonos() . "<br>";
echo "Después de vaciar: " . $empleado1->listarTelefonos(). "<br><br>";
$empleado1->vaciarTelefonos();


$empleado2 = new Empleado("Maria", "Tonon", 3500);
$empleado2->anyadirTelefono(987654321);

echo $empleado2->getNombreCompleto() ."<br>";
echo " Sueldo: " . $empleado2->getSueldo(). "<br>";
echo ($empleado2->debePagarImpuestos() ? "Paga impuestos" : "No paga impuestos") . "<br>" ;
echo "Teléfonos: " . $empleado2->listarTelefonos() . "<br>";
echo "Después de vaciar: " . $empleado2->listarTelefonos();
$empleado2->vaciarTelefonos();
?>