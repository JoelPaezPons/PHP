<?php

namespace Ejercicios\Modelo\Empleado312;
use Ejercicios\Modelo\Persona;
use Ejercicios\Modelo\Trabajador;

class Empleado extends Trabajador
{
    private float $sueldo;
    private array $telefonos = [];
    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, int $edad = 0, float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->sueldo = $sueldo;
    }

    // ------------------ Sueldo ------------------
    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    // Variable estática sueldoTope
    public static function getSueldoTope(): float
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldo): void
    {
        self::$sueldoTope = $sueldo;
    }

    // ------------------ Impuestos ------------------
    public function debePagarImpuestos(): bool
    {
        return $this->getEdad() > 21 && $this->sueldo > self::$sueldoTope;
    }

    // ------------------ Teléfonos ------------------
    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function listarTelefonos(): string
    {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    // ------------------ HTML ------------------
    public static function toHtml(\Persona $p): string
    {
        $html = "<p>Nombre completo: " . $p->getNombreCompleto() . "<br>";
        $html .= "Edad: " . $p->getEdad() . "</p>";

        if ($p instanceof Empleado) {
            $html .= "<p>Sueldo: " . $p->getSueldo() . "<br>Teléfonos:</p>";
            $html .= "<ol>";
            foreach ($p->getTelefonos() as $tel) {
                $html .= "<li>" . $tel . "</li>";
            }
            $html .= "</ol>";
        }

        return $html;
    }

    public function calcularSueldo(){
        return $this->getPrecioPorHora()* $this->
    }

    public function __toString()
    {
        return parent::__toString(). "Salario" . $this->getSueldo. ""
    }
}