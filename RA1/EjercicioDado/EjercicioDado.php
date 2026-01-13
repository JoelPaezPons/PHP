<?php
    //Variable dados
    (int)$dado1=rand(1,6);
    (int)$dado2=rand(1,6);
    (int)$dadoAlto=max($dado1,$dado2);

    //Variable mensaje
    (String)$mensaje1="";

    //Imprimir tirada de dados
    // echo"Tirada dado 1: $dado1"."</br>";
    // echo"Tirada dado 2: $dado2"."</br>";

    //Imprimir mensaje
    if($dado1 == $dado2)
        $mensaje1= "Has sacado pareja de $dado1";
    else
        $mensaje1= "No ha sacado pareja. El valor más alto es $dadoAlto";

    // echo $mensaje1;
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
    
    <legend>Tirada actual</legend>

    <fieldset>
    <p>
    <img src="img\<?php echo $dado1?>.svg" alt="<?php echo $dado1?>">
    <img src="img\<?php echo $dado2?>.svg" alt="<?php echo $dado2?>">
    </p>
    <p><?php echo $mensaje1 ?></p>
    <button>🎲 Volver a tirar</button>   
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
