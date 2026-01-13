<?php

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);


function compararDados($dado1, $dado2) {
    return $dado1 === $dado2;
}


function mensaje( $dado1,  $dado2){
    if (compararDados($dado1, $dado2)) {
        return "Ha sacado una pareja de $dado1";
    }
    return "No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".";
}

$mensaje = mensaje($dado1, $dado2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Ej1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>🎲JUEGO: DOS DADOS</h1>
    <p>Actualice la página o pulse el botón para una nueva tirada.</p>
    

    <fieldset>
    <legend>Tirada actual</legend>
    <p>
      <img src="img/<?= $dado1 ?>.svg" alt="Dado <?= $dado1 ?>" width="140" height="140">
      <img src="img/<?= $dado2 ?>.svg" alt="Dado <?= $dado2 ?>" width="140" height="140">
    </p>

    <?php
    echo $mensaje;
    ?>
    <br><br>
    <form method="get">
      <input type="submit" value="🎲 Volver a tirar">
    </form>
  </fieldset>

    

    <footer> 

        <?php 
    date_default_timezone_set("Europe/Andorra");
    $fechaActual = date("l d F Y");
    $fechaSegundos = date("H:i a");
    echo $fechaActual .", ". $fechaSegundos;
        ?>
        <br><br>
        <strong><i>by DAW2</i></strong>

    </footer>

</body>
</html>
