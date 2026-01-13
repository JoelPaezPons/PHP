<?php

namespace Modelo\Ejercicio323;
require_once("soporte.php");

class Juego extends Soporte{
    public string $consola;
    private int $minNumJugadores; 
    private int $maxNumJugadores;

    //Constructor
    public function __construct(string $consola, int $minNumJugadores, int $maxNumJugadores, string $titulo, int $numero, float $precio){
        parent::__construct( $titulo, $numero, $precio);

        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    //Getters
    public function getMinNumJugadores()
    {
        return $this->minNumJugadores;
    }
 
    public function getMaxNumJugadores()
    {
        return $this->maxNumJugadores;
    }

    public function muestraJugadoresPosibles(){
        $maximo = $this->maxNumJugadores;
        $minimo = $this->minNumJugadores;
        if($minimo == $maximo){
            echo "El numero minimo y maximo es igual"; 
        }else if($minimo > $maximo){
            echo "El numero minimo es mayor que el maximo";
        }else{
            echo "El numero maximo es mayor que el numero minimo";
        }

    }

    public function muestraResumen(){
        parent::muestraResumen();

        <<<html
        <p>El numero maximo de jugadores es: {$this->getMaxNumJugadores()} </p>
        <p>El numero minimo de jugadores es: {$this->getMinNumJugadores()} </p>
        html;

    }


}



?>