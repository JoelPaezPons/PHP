<?php

class Empleado extends Trabajador implements JSerializable
{



    //Metodos de la iface JSerializable
    public function toJson(): string
    {
        $mapa = new stdClass();
        foreach ($this as $clave => $valor) {
            $mapa->$clave = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}