<?php
namespace App\Modelo;

class CintaVideo extends Soporte {
    private int $duracion; 

    public function __construct(int $duracion){
        $this->duracion = $duracion;
    }

    public function getDuracion(): int {
        return $this->duracion;
    }

    public function muestraResumen() {
        parent::muestraResumen();
        echo "Duración: " . $this->getDuracion() . " minutos.<br>";
    }
}
?>