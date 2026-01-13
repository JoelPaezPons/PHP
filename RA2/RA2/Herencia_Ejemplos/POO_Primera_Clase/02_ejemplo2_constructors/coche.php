<?php

class coche{
    //Atributos
    private String $marca;
    private String $modelo;
    private String $color;
    private String $propietario;
    private String $tipo;

    //Metodos
    public function __construct(String $marca, String $modelo, String $color, String $propietario, String $tipo){
        
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;
        $this->tipo = $tipo;

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

    public function getTipo():String{
        return $this->tipo;
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

    public function setTipo(string $nuevoTipo):void{
        $this->tipo = $nuevoTipo;
    }
}

    $coche1 = new coche("Seat", "Leon", "Rojo", "Daniel");
    echo "{$coche1->getpropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getmodelo()} de color {$coche1->getcolor()}.";

    $coche1 = new coche("Seat", "Leon", "Rojo", "Joel", "Electrico");
    echo "{$coche1->getpropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getmodelo()} de color {$coche1->getcolor()} y es {$coche1->getTipo()}.";




?>