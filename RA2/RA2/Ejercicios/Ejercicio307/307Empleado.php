<?php
class Empleado extends Persona
{
    private float $sueldo;
    private array $telefonos = [];
    private static float $sueldoTope = 3333;

    // Constructor: llama al padre para nombre/apellido
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

    // Variable estática sueldoTope
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


    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return implode(", ", $this->telefonos);
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public static function toHtml(Persona $emp): string
{
    $html = "<p>";
    $html .= "Nombre completo: " . $emp->getNombreCompleto() . "<br>";
    if ($emp instanceof Empleado) {
        $html .= "Sueldo: " . $emp->getSueldo() . "<br>";
        $html .= "Teléfonos:</p>";
        $html .= "<ol>";
        foreach ($emp->getTelefonos() as $numero) {
            $html .= "<li>" . $numero . "</li>";
        }
        $html .= "</ol>";
    }

    return $html;
}
}