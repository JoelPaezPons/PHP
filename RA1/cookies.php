<?php

//setcookie(nombre [, valor [, expira [, ruta [, dominio [, seguro [, httponly ]]]]]]);
setcookie("nombre", "valor", time() + 3600, "/");

/*
"nombre" → nombre de la cookie.

"valor" → contenido de la cookie.

time() + 3600 → fecha de expiración (en este caso, dentro de 1 hora).

"/" → ruta en la que la cookie es válida (por defecto, todo el sitio).
*/

echo "Cookie creada";


//Por ejemplo, mediante cookies podemos comprobar la cantidad de visitas diferentes que realiza un usuario:
$accesosPagina = 0;
if (isset($_COOKIE['accesos'])) { 
    $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
    setcookie('accesos', ++$accesosPagina); // le asignamos un valor
}

//Para borrar una cookie se puede poner que expiren en el pasado:
setcookie("nombre", "", 1) // pasado




?>
