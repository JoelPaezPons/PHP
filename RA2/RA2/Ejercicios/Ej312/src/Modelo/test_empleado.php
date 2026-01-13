<?php
require_once 'Gerente.php';
require_once '312Empleado.php';

use Ejercicios\Model\Ejercicios\Gerente;
use Ejercicios\Model\Ejercicios\Empleado;

$gerente1 = new Gerente('Gerente1', 'Gonzalez', '21', '[744747444]', 2000);
$gerente2 = new Gerente('Gerente2', 'Gonzalez', '21', '[744747444]', 3000);
$empleado1 = new Empleado('Empleado1', 'Gonzalez', '21', '[744747444]', 1000);


//Prueba de metodos

echo $gerente1;

$cadena_serializada = serialize($gerente1);
$usuario_deserializado =unserialize($cadena_serializada);

echo "<pre>";
var_dump($usuario_deserializado);
"</pre>";

$objeto = new stdClass();
$objeto->nombre="Ejemplo";
$objeto->valor=123;

$json_string = json_encode($$objeto);
echo $json_string;

$objeto

?>