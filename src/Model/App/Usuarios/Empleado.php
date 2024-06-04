<?php

namespace ITColima\SiitecApi\Model\App\Usuarios;

/**
 * @property-read string $id_departamento
 * @property-read string $departamento
 * @property-read string $departamento_corto
 * @property-read string $id_departamento_academico
 * @property-read string $departamento_academico
 * @property-read string $departamento_academico_corto
 */
class Empleado
{
    public $id_empleado;
    public $id_usuario;
    public $id_perfil;
    public $nombres;
    public $apellido1;
    public $apellido2;
    public $curp;
    public $rfc;
    public $usuario;
    public $password;
}
