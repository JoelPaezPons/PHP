<?php

include_once ("301Empleado.php");

$empleado = new Empleado("Joel", "Paez", 2000);

echo $empleado->getNombreCompleto() . "<br>";
echo $empleado->getSueldo() . "<br>";
echo $empleado->debePagarImpuestos() ? "Sí paga" : "No paga";
?>