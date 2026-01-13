<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $telefono = [];

    // Constructor
    public function __construct(string $nombre, string $apellido, float $sueldo = 1000)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    // Getters y setters
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    // Setter de sueldo (este sí se permite)
    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    // Métodos del ejercicio anterior
    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > 3333;
    }

    // Teléfonos
    public function anyadirTelefono(int $telefono): void
    {
        $this->telefono[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return implode(", ", $this->telefono);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefono = [];
    }

}

