<?php

include_once ("302EmpleadoTelefonos.php");

$empleado = new Empleado("Joel", "Paez", 2000);

$empleado->anyadirTelefono(666111222);
$empleado->anyadirTelefono(987654321);

echo $empleado->getNombreCompleto() . "<br>";
echo "Sueldo:" . $empleado->getSueldo(). "<br>";
echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";

$empleado->vaciarTelefonos();

echo "Después de vaciar: " . $empleado->listarTelefonos();

?>