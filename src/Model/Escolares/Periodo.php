<?php

namespace ITColima\SiitecApi\Model\Escolares;

use JsonSerializable;

class Periodo implements JsonSerializable
{
    public $periodo_id;
    public $nombre;
    public $clave;
    public $inicio;
    public $termino;
    public $verano;
    public $actual;

    public function jsonSerialize()
    {
        return [
            'periodo_id' => $this->periodo_id,
            'nombre' => $this->nombre,
            'clave' => $this->clave,
            'inicio' => $this->inicio,
            'termino' => $this->termino,
            'verano' => $this->verano,
            'actual' => $this->actual
        ];
    }
}
