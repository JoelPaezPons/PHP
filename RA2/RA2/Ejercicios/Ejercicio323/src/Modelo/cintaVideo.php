<?php

use Modelo\Ejercicio323\Soporte;

class CintaVideo extends Soporte {
    // 1. Define la propiedad duracion
    private int $duracion; 

    // 2. Define el constructor
    public function __construct(int $duracion) {
        $this->duracion = $duracion;
    }

    // 3. Define el getter para la duracion
    public function getDuracion(): int {
        return $this->duracion;
    }

    public function muestraResumen() {
        parent::muestraResumen();
        echo "Duración: " . $this->getDuracion() . " minutos.<br>";
    }
}
?>