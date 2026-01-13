<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private float $sueldo;

    // Constructor
    public function __construct(string $nombre, string $apellido, float $sueldo)
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

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    // Métodos del enunciado
    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > 3333;
    }
}


