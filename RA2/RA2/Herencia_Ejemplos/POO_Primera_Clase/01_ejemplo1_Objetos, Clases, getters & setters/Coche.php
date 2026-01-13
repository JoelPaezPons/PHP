<?php

class coche{
    //Atributos
    private String $marca;
    private String $modelo;
    private String $color;
    private String $propietario;

    //Metodos
    public function __construct(String $marca, String $modelo, String $color, String $propietario){
        
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;

    }

    //Getters
    public function getMarca():String{
        return $this->marca;
    }

    public function getmodelo():String{
        return $this->modelo;
    }

    public function getcolor():String{
        return $this->color;
    }

    public function getpropietario():String{
        return $this->propietario;
    }

    //Setters
    public function setMarca(string $nuevaMarca):void{
        $this->marca = $nuevaMarca;
    }

    public function setModelo(string $nuevoModelo):void{
        $this->modelo = $nuevoModelo;
    }

    public function setColor(string $nuevoColor):void{
        $this->color = $nuevoColor;
    }

    public function setPropietario(string $nuevoPropietario):void{
        $this->propietario = $nuevoPropietario;
    }
}

    $coche1 = new coche("Seat", "Leon", "Rojo", "Daniel");
    echo "{$coche1->getpropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getmodelo()} de color {$coche1->getcolor()}.";



?>