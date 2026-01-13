<?php

use App\Modelo\Soporte;
use Modelo\Ejercicio323\Dvd;
use Modelo\Ejercicio323\Juego;

class cliente
{
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados;
    private int $numSoporteAlquilados;
    private int $maxAlquilerConcurrentes;

    public function __construct(string $nombre, int $numero, array $soportesAlquilados, int $numSoporteAlquilados, int $maxAlquilerConcurrentes)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->soportesAlquilados = [];
        $this->numSoporteAlquilados = $numSoporteAlquilados;
        $this->maxAlquilerConcurrentes = $maxAlquilerConcurrentes;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getSoportesAlquilados()
    {
        return $this->soportesAlquilados;
    }
    public function getNumSoporteAlquilados()
    {
        return $this->numSoporteAlquilados;
    }
    public function getMaxAlquilerConcurrentes()
    {
        return $this->maxAlquilerConcurrentes;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function tieneAlquilado(Soporte $s)
    {
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte === $s) {
                if ($s instanceof CintaVideo || $s instanceof Dvd || $s instanceof juego) {
                    echo "Es un soporte de tipo: " . get_class($s);
                }
                return true;
            }
        }
        return false;
    }

    public function alquilar(Soporte $s){
        if($this->tieneAlquilado($s)){
            echo " {$this->nombre}  ya tiene un soporte alquilado";
            return false;
        }

        if($this->getNumSoporteAlquilados() >= $this->maxAlquilerConcurrentes){
            echo "{$this->nombre} no puede alquilar mas soportes";
            return false;
        }

        $this->numSoporteAlquilados++;
        array_push($this->soportesAlquilados, $s);
        echo "Se ha alquilado correctamente";
        return true;

    }

    



}
