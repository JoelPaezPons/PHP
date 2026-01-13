<?php

require_once("Vehiculo.php");

class Autobus extends Vehiculo
{

    private String $empresa;

    public function __construct(String $marca, String $modelo, String $color, String $propietario, String $empresa,)
    {
        parent::__construct($marca, $modelo, $color, $propietario, $empresa);
        $this->empresa = $empresa;
    }

    //Getters
    public function getEmpresa()
    {
        return $this->empresa;
    }

    //Setters
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function puedeAparcar(String $planta):bool{
        return $this->$planta == "superficie";
    }
}

    

?>
