<?php
class Empleado extends Persona
{
    private float $sueldo;
    private array $telefonos = [];
    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellido);
        $this->sueldo = $sueldo;
    }

    // Sueldo
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

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope;
    }

    // Teléfonos
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

    // Método estático sobrescrito
    public static function toHtml(Persona $p): string
    {
        // Primero mostramos siempre el nombre completo usando Persona
        $html = "<p>Nombre completo: " . $p->getNombreCompleto() . "</p>";

        // Si es un empleado, mostramos sueldo y teléfonos
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
}