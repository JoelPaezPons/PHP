<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    

<form method="post" action="">
<label for="number">Pon un numero: </label>
<input type="text" id="operacion1" name="operacion1">
<br><br>
<label for="number">Pon un numero: </label>
<input type="text" id="operacion2" name="operacion2">
<br><br>
<label for="suma">Sumar</label>
<input type="radio" name="operador" value="+">
<label for="restar">Restar</label>
<input type="radio" name="operador" value="-">
<label for="multiplicar">Multiplicar</label>
<input type="radio" name="operador" value="*">
<label for="dividir">Dividir</label>
<input type="radio" name="operador" value="/">
<br><br>

<input type="submit" value="Calcular">

</form>


<?php


if(isset($_POST['operacion1']) && isset($_POST['operacion2']) && isset($_POST['operador'])){
    //Crear variables
    $operacion1 = (int) $_POST['operacion1'];
    $operacion2 = (int) $_POST['operacion2'];
    $operador = $_POST['operador'];


    //Switch con las operaciones
    switch($operador){
        case '+': $resultado = $operacion1 + $operacion2; break;
        case '-': $resultado = $operacion1 - $operacion2; break;
        case '*': $resultado = $operacion1 * $operacion2; break;
        case '/': if($operacion2 != 0){
            $resultado = $operacion1 / $operacion2;
        }else{
            $resultado = "No se puede dividir entre 0";
        }break;
    }

}else{
    echo "Aun no has hecho la operación";
}

//Mostrar el resultado
if(isset($resultado)){
    echo "Resultado: " . $resultado;
}









?>



</body>
</html>