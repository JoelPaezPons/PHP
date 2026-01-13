<?php

namespace Ejercicios\Ej312\Trabajador;
use Ejercicios\Modelo\Persona312\Persona;
abstract class Trabajador extends Persona{
    
    public static float $sueldoTope = 3333;
    private const EDAD_EMPUESTOS = 21;
    private array $telefonos = [];

    
    public function __construct(
        protected string $nombre, 
        protected string $apellido, 
        protected string $edad, 
        protected string $sueldo = 1000){}


        //Getters y Setters
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }

    public function setSueldoTope($sueldoTope)
    {
        $this->sueldoTope = $sueldoTope;

        return $this;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    //Funciones

    public function debePagarImpuestos(){
        return $this->sueldo > Trabajador::$sueldoTope && $this->edad >= Trabajador::EDAD_EMPUESTOS;
        
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }


    public function listarTelefonos(): string
    {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .="Horas trabajadas:" . $this->horasTrabajadas . "\n";
        $str .="Precio por hora:" . $this->precioPorHora . "\n";
        $str .="Sueldo:" . $this->sueldo . "\n";
        $str .="Telefonos:" . $this->telefonos . "\n";
    }

    }




?>