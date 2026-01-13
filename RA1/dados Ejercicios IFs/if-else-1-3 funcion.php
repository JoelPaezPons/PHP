<?php
function lanzarDado() {
    return rand(1, 6);
}

function tirarJugador() {
    $dado1 = lanzarDado();
    $dado2 = lanzarDado();
    return $dado1;
    return $dado2;
}

// Función para calcular la pareja y total de un jugador
function evaluarJugador($dados) {
    $dado1 = $dados;
    $dado2 = $dados;
    $pareja = ($dado1 == $dado2);
    $total = $dado1 + $dado2;

    return $dados;
    return $pareja;
    return $total;
}


function Ganador($jugador1, $jugador2) {
     if ($jugador1_pareja && $jugador2_pareja) {
        echo "Ha ganado el jugador 1";
    } elseif ($jugador1_pareja && $jugador2_pareja) {
        echo "Ha ganado el jugador 2";
    } elseif ($jugador1_total > $jugador2_total) {
        echo "Ha ganado el jugador 1";
    } elseif ($jugador1_total < $jugador2_total) {
        echo "Ha ganado el jugador 2";
    } else {
        echo "Han empatado";
    }
}

// Función principal del juego
function jugar() {
    $jugador1 = evaluarJugador(tirarJugador());
    $jugador2 = evaluarJugador(tirarJugador());

    echo "Jugador 1: $jugador1 y $jugador1 Total: $jugador1 Pareja: $jugador1";
    echo "Jugador 2: $jugador2 y $jugador2 Total: $jugador2 Pareja: $jugador2";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Dos dados más altos - Juego</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Juego: Dos dados más altos</h1>
  <p>Actualice la página para mostrar una nueva tirada.</p>
  <table>
    <thead>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="padding:10px;background-color:red;">
          <img src="img/<?= $dado1a ?>.svg" alt="<?= $dado1a ?>" width="140" height="140">
          <img src="img/<?= $dado1b ?>.svg" alt="<?= $dado1b ?>" width="140" height="140">
        </td>
        <td style="padding:10px;background-color:blue;">
          <img src="img/<?= $dado2a ?>.svg" alt="<?= $dado2a ?>" width="140" height="140">
          <img src="img/<?= $dado2b ?>.svg" alt="<?= $dado2b ?>" width="140" height="140">
        </td>
        <td><?= $resultado ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
