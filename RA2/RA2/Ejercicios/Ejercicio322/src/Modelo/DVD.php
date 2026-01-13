<?php

namespace App\Modelo;

class Dvd extends Soporte {
    
    // Propiedades propias del DVD
    public string $idiomas;
    private string $formatPantalla;

    public function __construct(string $titulo, int $numero, float $precio, string $idiomas, string $formatPantalla) {
        
        parent::__construct($titulo, $numero, $precio);
  
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }

    // Getters
    public function getIdiomas(): string {
        return $this->idiomas;
    }

    public function getFormatPantalla(): string {
        return $this->formatPantalla;
    }


    public function muestraResumen() {
        //Metodo del padre
        parent::muestraResumen();
        

        echo "Idiomas: " . $this->getIdiomas() . "<br>";
        echo "Formato de pantalla: " . $this->getFormatPantalla() . "<br>";
    }
}

?>