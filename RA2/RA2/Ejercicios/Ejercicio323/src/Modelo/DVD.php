<?php
namespace Modelo\Ejercicio323;
use Modelo\Ejercicio323\Soporte;
require_once("DVD.php");
require_once("soporte.php");

class Dvd extends Soporte {
    
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
        
        parent::muestraResumen();
        $html = <<<html

         <p>Idiomas:  {$this->getIdiomas()}</p><br>
         <p>Formato de pantalla:  {$this->getFormatPantalla()}</p>

        html;
        echo $html;
    }
}

?>