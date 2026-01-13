<?php
//Array Asociativo

$capitales = ["España" => "Barcelona", "Francia" => "Paris","Portugal" => "Lisboa"];

$capitalEspaña = $capitales ["España"];

echo "La capital de españa es $capitalEspaña <br>";

foreach($capitales as $capital){
    echo "Esta $capital <br>";
}

foreach($capitales as $pais => $ciudad){
    echo "$pais : $ciudad <br>";
}

//print_r($array) muestra el contenido de todo el array

print_r($capitales);


//Array bidimensional

$menu1 = ["Plato1" => "Macarrones con queso", "Plato2" => "Pescado asado", "Bebida" => "Coca-Cola", "Postre" => "Helado de vainilla"];
$menu2 = ["Plato1" => "Sopa", "Plato2" => "Lomo con patatas", "Bebida" => "Agua", "Postre" => "Arroz con leche"];

$menus = [$menu1, $menu2];

foreach($menus as $menusDelDia){
    echo "Menu del dia <br>";
    foreach($menusDelDia as $platos => $comida){
        echo "$platos ; $comida <br>";
    }
}

$cadena = "El caballero oscuro";
$tam = strlen($cadena);
echo "La longitud de '$cadena' es: $tam <br />";

$oscuro = substr($cadena, 13); // desde 13 al final
$caba = substr($cadena, 3, 4); // desde 3, 4 letras
$katman = str_replace("c", "k", $cadena);
echo "$oscuro $caba ahora es $katman";



?>