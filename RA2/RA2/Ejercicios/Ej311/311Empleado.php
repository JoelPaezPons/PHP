<?php

require_once "311Persona.php";
class Empleado extends Persona
{
    public static float $sueldoTope = 3333;
    private const EDAD_EMPUESTOS = 21;
    public float $sueldo;
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000, $edad)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->sueldo = $sueldo;
    }

    // Getters y Setters

    public function getSueldo(): int
    {
        return $this->sueldo;
    }

    public function setSueldo(int $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    public static function getSueldoTope(): int
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor): void
    {
        self::$sueldoTope = $valor;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope && $this->getEdad() > self::EDAD_EMPUESTOS;
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

    public function getTelefonos()
    {
        return $this->telefonos;
    }

    public static function toHtml(Persona $emp): string
    {

        if ($emp instanceof Empleado) {
            $emp_telefonos = "";
            foreach ($emp->getTelefonos() as $telefono) {
                $emp_telefonos .= "<li>{$telefono}</li>";
            }
            return "<p>Empleado: {$emp->getNombreCompleto()} | Sueldo: {$emp->getSueldo()} | Telefono: {$emp->listarTelefonos()}";
        }
        return "$emp no es empleado";
    }



}
