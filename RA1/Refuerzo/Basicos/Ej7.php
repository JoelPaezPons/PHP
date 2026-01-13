<?php

$paises = ["España" => "Madrid",
           "Francia" => "Paris",
           "Rusia" => "Moscu",
           "Italia" => "Roma",
           "Argentina" => "Buenos Aires"];

            $cont = 0;

           foreach($paises as $clave => $valor){
            $cont++;
            echo "Paises: $clave, Capital: $valor <br>";
           }
           echo "$cont";


?>