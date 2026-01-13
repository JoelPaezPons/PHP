<?php
// Definir precios
$precios = [
  "0-5" => 2.0,
  "6-10" => 1.8,
  "11+" => 1.5
];

// Variable por defecto
$total = '';

// Calcular solo si el formulario fue enviado
if (isset($_POST['kilos']) && is_numeric($_POST['kilos'])) {
    $kilos = (float) $_POST['kilos'];

    if ($kilos <= 5) {
        $precio = 2.0;
    } elseif ($kilos <= 10) {
        $precio = 1.8;
    } else {
        $precio = 1.5;
    }

    $total = $kilos * $precio;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="number">Cuantos kilos de patatas quieres: </label>
<input type="text" id="kilos" name="kilos">
<br><br>
<label for="number">Enviar: </label>
<input type="submit" id="enviar" name="enviar">
<br><br>
<label for="importe">Importe Total</label>
<input type="text" value="<?php echo $total ?>" readonly>
<br><br>



</body>
</html>