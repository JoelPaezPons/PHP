<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $telefono = [];

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

    public function getTelefono()
    {
        return $this->telefono;
    }
    
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

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

    public function anyadirTelefono(int $telefono) : void{
        $this->telefono[] = $telefono;
    }

    public function listarTelefonos(): string{
        return implode(",", $this->telefono);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefono = [];
    }

}

