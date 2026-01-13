<?php

namespace Ejercicios\Ej312\Gerente;
use Ejercicios\Ej312\Trabajador;
class Gerente extends Trabajador{

    private string $nombre;
    private string $apellido;
    private array $telefono = [];
    private float $salario;

    private int $edad;


    public function __construct(string $nombre, string $apellido, int $edad, array $telefono, float $salario = 1000){
        parent::__construct($nombre, $apellido, $edad, $telefono, $salario);
    }


    public function calcularSalario(){
        return $this->salario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }


    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getSueldo()
    {
        return $this->salario;
    }

    public function setSueldo($salario)
    {
        $this->salario = $salario;

        return $this;
    }


    public function __toString()
    {
        throw new \Exception('Not implemented');
    }

}




?>