<?php

function lanzarDado() {
    return rand(1, 6);
}

function evaluarDados($dado1, $dado2) {
    if ($dado1 === $dado2) {
        return [
            "Ha sacado una pareja de $dado1",
        ];
    } else {
        return [
          "No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".",
        ];
    }
}

function jugar(){
  $dado1 = lanzarDado();
    $dado2 = lanzarDado();

    $resultado = evaluarDados($dado1, $dado2);

    echo "Dado 1: $dado1<br>";
    echo "Dado 2: $dado2<br>";
    echo "$resultado";
}
    
jugar();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dos dados.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>🎲 Juego: Dos dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <p>
    <img src="img/<?= $dado1 ?>.svg" alt="Dado <?= $dado1 ?>" width="140" height="140">
    <img src="img/<?= $dado2 ?>.svg" alt="Dado <?= $dado2 ?>" width="140" height="140">
  </p>

  <p><strong><?= $mensaje ?></strong></p>
  <footer>
    <time datetime="<?= date('c') ?>">
      <?= date('d \d\e F \d\e Y, H:i') ?>
    </time>
    <p>by DAW2</p>
  </footer>
</body>

</html>