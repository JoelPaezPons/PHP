<?php

//Listas

$my_array = [1,2,3];

echo gettype($my_array) . "<br>";
echo $my_array[0] . "<br>";
echo $my_array[1] . "<br>";
echo $my_array[2];

//Añadir datos a la lista
array_push($my_array, 3);
print_r($my_array);

//flujos

for($index = 0; $index<=10; $index++){
    echo "$index <br>" ;
}

foreach($my_array as $my_item){
    echo $my_item;
}

$index = 0;
while ($index < sizeof($my_array) -1 ){
    echo $my_array[$index] . "<br>";
    $index++;
}

//Funciones

$my_number = 5;
function print_number( int $my_number){
    echo "$my_number <br>";
}

print_number($my_number);


?>