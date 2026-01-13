<?php

class Vehiculo{
    //Atributos
    private String $marca;
    private String $modelo;
    private String $color;
    private String $propietario;
    private array $planta = ["superficie", "subterranio1", "subterraneo2"];
    //Metodos
    public function __construct(String $marca, String $modelo, String $color, String $propietario, String $planta){
        
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;

        //Valor inicial opcional
        $this->planta = $this->$planta[0];//"Superficie"

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

    public function getplanta():String{
        return $this->planta[0];
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

    public function setPlanta(string $nuevaPlanta):void{
        $this->planta[0] = $nuevaPlanta;
    }
}
