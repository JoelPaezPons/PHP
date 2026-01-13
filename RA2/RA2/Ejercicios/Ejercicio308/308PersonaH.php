<?php

class Persona
{
    private string $nombre;
    private string $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
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

    // Método estático para mostrar datos de Persona
    public static function toHtml(Persona $p): string
    {
        return "<p>Nombre completo: " . $p->getNombreCompleto() . "</p>";
    }
}

