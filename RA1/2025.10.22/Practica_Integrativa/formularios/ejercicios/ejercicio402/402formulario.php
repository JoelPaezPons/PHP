<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 402</title>
</head>
<body>

    <form method="post" action="">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value="">
        <br><br>

        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" name="apellido" value="">
        <br><br>

        <label for="url">URL página personal: </label>
        <input type="text" id="url" name="url" value="">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="">
        <br><br>

        <label>Sexo:</label>
        <br>
        <input type="radio" id="hombre" name="sexo" value="Hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label>
        <br><br>

        <label for="convivientes">Número de convivientes en el domicilio: </label>
        <input type="number" id="convivientes" name="convivientes" value="">
        <br><br>

        <label>Aficiones:</label>
        <br>
        <input type="checkbox" id="deporte" name="aficiones[]" value="Deporte">
        <label for="deporte">Deporte</label><br>
        <input type="checkbox" id="amigos" name="aficiones[]" value="Quedar con amigos">
        <label for="amigos">Quedar con los amigos</label><br>
        <input type="checkbox" id="cine" name="aficiones[]" value="Cine">
        <label for="cine">Cine</label><br>
        <input type="checkbox" id="juegos" name="aficiones[]" value="Jugar Videojuegos">
        <label for="juegos">Jugar Videojuegos</label><br>
        <br>

        <label for="menuFavorito">Menú Favorito:</label>
        <br>
        <select id="menuFavorito" name="menuFavorito[]" multiple>
            <option value="Pizza">Pizza</option>
            <option value="Hamburguesa">Hamburguesa</option>
            <option value="Pasta">Pasta</option>
            <option value="Sushi">Sushi</option>
            <option value="Arroz">Arroz</option>
        </select>
        <br><br>

        <input type="submit" name="accion" value="Enviar">
    </form>



    <?php
if (isset($_POST['accion'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $sexo = $_POST['sexo']; 
    $convivientes = $_POST['convivientes'];
    $aficiones = $_POST['aficiones']; 
    $menu = $_POST['menuFavorito']; 
}


if (isset($_POST['accion'])) {
    echo "<table border='1'>";
    echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
    echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>URL</td><td>$url</td></tr>";
    echo "<tr><td>Convivientes</td><td>$convivientes</td></tr>";
    echo "<tr><td>Aficiones</td><td>" . implode(', ', $aficiones) . "</td></tr>";
    echo "<tr><td>Menú Favorito</td><td>" . implode(', ', $menu) . "</td></tr>";
    echo "</table>";
}

?>


    
</body>
</html>
