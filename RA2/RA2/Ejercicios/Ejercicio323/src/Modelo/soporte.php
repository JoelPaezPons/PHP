<?php
namespace Modelo\Ejercicio323;

class Soporte {
    
    // Propiedades con la visibilidad correcta del diagrama UML:
    public string $titulo;
    protected int $numero;
    private float $precio;
    
    // Propiedad privada y estática para la constante IVA (0.21)
     private const IVA = 0.21; 

    public function __construct(string $titulo, int $numero, float $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    // Getters
    public function getPrecio(): float {
        return $this->precio;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function getPrecioConIva(): float {
        return $this->precio * (1 + self::IVA);
    }

    public function muestraResumen() {
        echo "<hr>Título: **" . $this->titulo . "** (" . $this->numero . ")<br>";
        echo "Precio (sin IVA): " . $this->getPrecio() . " €<br>";
        echo "Precio (con IVA): " . $this->getPrecioConIva() . " €<br>";
    }
}

?>