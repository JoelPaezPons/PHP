<?php
$page_title = "Ejercicios de Formularios";
$current_page = "Formularios";

define('BASE_PATH', __DIR__);

$texto_lista = 'Ejercicio';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css"> <!-- si el CSS está una carpeta arriba -->
    <title><?= $page_title ?></title>
</head>

<body>
<main class="container">
    <section class="about">
        <h1><?= $page_title ?></h1>
        <ol>
            <?php
for ($i = 402; $i <= 407; $i++) {
    $ruta = "ejercicios/ejercicio{$i}/{$i}formulario.php";
    if (file_exists($ruta)) {
        echo "<li><a href='$ruta'>Ejercicio {$i}</a></li>";
        
    } else {
        echo "<li>Ejercicio {$i}</li>";
    }
}
?>
        </ol>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
</body>
</html>
