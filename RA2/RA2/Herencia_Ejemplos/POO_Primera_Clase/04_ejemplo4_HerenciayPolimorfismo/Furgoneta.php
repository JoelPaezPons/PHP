<?php

include_once("Vehiculo.php");

class Furgoneta extends Vehiculo{


    private string $altura;

    public function __construct(string $marca, string $modelo, string $color, string $propietario, string $altura){
        parent::__construct($marca, $modelo, $color, $propietario);
        $this->altura = $altura;
    }
    
    public function puedeAparcar(string $planta):bool{
        $plantas = $this->getPlantasDisponibles();

        //Una furgoneta
        return in_array($planta, $plantas, true) && $planta !== "subterraneo2";
}

}




?>