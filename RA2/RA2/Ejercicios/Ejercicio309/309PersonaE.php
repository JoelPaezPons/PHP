<?php

class Persona
{
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function __construct(string $nombre, string $apellido, int $edad = 0)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    // ------------------ Edad ------------------
    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    // ------------------ Método estático toHtml ------------------
    public static function toHtml(Persona $p): string
    {
        return "<p>Nombre completo: " . $p->getNombreCompleto() . "<br>Edad: " . $p->getEdad() . "</p>";
    }
}

