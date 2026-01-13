<?php

class Empleado
{
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $telefono = [];
    private static float $sueldoTope = 3333;

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

    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    public static function getSueldoTope(): float
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldo): void
    {
        self::$sueldoTope = $sueldo;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope;
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

    // Getter para el array completo de teléfonos
    public function getTelefonos(): array
    {
        return $this->telefono;
    }

    public function vaciarTelefonos(): void
    {
        $this->telefono = [];
    }

    // Método estático para generar HTML
    public static function toHtml(Empleado $emp): string
{
    $html = "<p>";
    $html .= "Nombre completo: " . $emp->getNombreCompleto() . "<br>";
    $html .= "Sueldo: " . $emp->getSueldo() . "<br>";
    $html .= "Teléfonos:";
    $html .= "</p>";

    $html .= "<ol>";
    foreach ($emp->getTelefonos() as $numero) {
        $html .= "<li>" . $numero . "</li>";
    }
    $html .= "</ol>";

    return $html;
}
}
