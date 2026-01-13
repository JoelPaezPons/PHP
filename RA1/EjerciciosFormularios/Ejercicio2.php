<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="nombre">Nombre: </label>
<input type="text" id="nombre" name="nombre">
<br><br>

<label>Deportes que practicas</label><br>
<input type="checkbox" name="deportes[]" value="Voley">Voley<br>
<input type="checkbox" name="deportes[]" value="Hockey">Hockey<br>
<input type="checkbox" name="deportes[]" value="Futbol">Futbol<br>
<br>
<input type="submit" value="Enviar">

</form>

<?php

//Crear variables
$nombre = $_POST['nombre'];
$deportes = $_POST['deportes'];

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
    echo "Nombre: " . $nombre . "<br>";
}else{
    echo "El formulario esta vacio";
}


echo "Deportes: ";
echo "<ul>";

foreach($deportes as $deporte){
    echo "<li> " . $deporte;
}


?>

</body>
</html>