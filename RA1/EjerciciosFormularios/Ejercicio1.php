<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<label for="nombre">Nombre: </label>
<input type="text" id="nombre" name="nombre">
<br><br>
<label for="apellido">Apellido: </label>
<input type="text" id="apellido" name="apellido">
<br><br>
<input type="hidden" name="id" value="123">
<input type="submit" name="accion" value="Borrar">
<input type="submit" name="accion" value="Enviar">
<br><br>
</form>

<?php

$nombreCompleto = $_GET ['nombre'] . " " . $_GET['apellido'];
$nombreCompleto = ucwords($nombreCompleto);


if(isset($_GET['accion']) && ($_GET['accion']) == "Enviar"){
    echo "Nombre: " . $_GET['nombre'] . "<br>";
    echo "Apellido: " . $_GET['apellido'] . "<br>";
    echo "Nombre completo: " . $nombreCompleto;
}else if(isset($_GET['accion']) && ($_GET['accion'])== "Borrar"){
    echo "Has elegido borrar";
}else{
    echo "No has enviado el formulario aun";
}

?>

</body>
</html>