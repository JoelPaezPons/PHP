<?php

namespace App\Modelo;
class Soporte
{

    public string $titulo;
    protected int $numero;
    private float $precio;


    private static const IVA = 0.21;

    public function __construct(string $titulo, int $numero, float $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    // Getters
    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getPrecioConIva(): float
    {
        return $this->precio * (1 + self::IVA);
    }

    public function muestraResumen()
    {

        $html = <<<HTML
            <hr>Título:  {$this->titulo}   {$this->numero} <br>
            Precio (sin IVA):   {$this->getPrecio()}   €<br>
            Precio (con IVA):   {$this->getPrecioConIva()}   €<br>
        HTML;
        echo $html;
    }
}
