<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 403</title>
</head>
<body>

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
        <input type="text" id="nombre" name="nombre" required value="">
        <br><br>

        <label for="apellido">Apellido: </label>
        <input type="text" id="apellido" name="apellido" required value="">
        <br><br>

        <label for="url">URL página personal: </label>
        <input type="url" id="url" name="url" required value="">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required value="">
        <br><br>

        <label>Sexo:</label>
        <br>
        <input type="radio" id="hombre" name="sexo" required value="Hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label>
        <br><br>

        <label for="convivientes">Número de convivientes en el domicilio: </label>
        <input type="number" required id="convivientes" name="convivientes" value="">
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
    $nombre = filter_var ($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var ($_POST['apellido'], FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    if(!filter_var ($email, FILTER_VALIDATE_EMAIL)){
        $email = "Email no valido";
    }

    $url = $_POST['url'];
    if(!filter_var ($url, FILTER_VALIDATE_URL)){
        $url = "URL no valida";
    }

    $sexo = $_POST['sexo'] ?? "No seleccionado"; 

    $convivientes = $_POST['convivientes'];
    if(!filter_var ($conviviente, FILTER_VALIDATE_INT,["options" =>["min_range" => 0, "max_range" => 10]])){
        $conviviente = "El numero no es valido";
    }

    $aficiones = $_POST['aficiones'] ?? "No seleccionado"; 

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


</body>
</html>