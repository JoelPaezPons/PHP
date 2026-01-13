<?php

require_once("Vehiculo.php");

class coche extends Vehiculo{

    public function puedeAparcar(string $planta):bool{
        $plantas = $this->getPlantasDisponibles();
        //Verifica que la planta exista y que no sea superficie
        return in_array($planta,$plantas, true) && $planta !== $plantas[0];
    }

}



?>