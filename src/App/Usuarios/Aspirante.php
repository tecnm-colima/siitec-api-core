<?php

namespace ITColima\SiitecApi\Model\App\Usuarios;

use JsonSerializable;

class Aspirante implements JsonSerializable
{
    // usuarios
    public $id_usuario;
    public $usuario;
    public $password;

    // aspirantes
    public $id_aspirante;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $curp;

    // usuarios_correos
    public $correo;
    public $correo_verify;

    public function jsonSerialize()
    {
        return [
            'id_usuario' => $this->id_usuario,
            'usuario' => $this->usuario,
            'password' => $this->password,
            'id_aspirante' => $this->id_aspirante,
            'nombres' => $this->nombres,
            'apellido1' => $this->apellido1,
            'apellido2' => $this->apellido2,
            'curp' => $this->curp,
            'correo' => $this->correo,
            'correo_verify' => $this->correo_verify
        ];
    }
}
