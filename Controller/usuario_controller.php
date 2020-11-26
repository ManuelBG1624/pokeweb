<?php
require_once('../BD/conexion.php');
class Usuario
{
    private $codigo_usuario;
    private $nombre_usuario;
    private $apellido_usuario;
    private $dni_usuario;
    private $correo_usuario;
    private $celular_usuario;
    private $direccion_usuario;
    private $estado_usuario;
    private $fecha_registro_usuario;
    private $codigo_tipo_usario;
    private $tipo_usuario;
    private $codigo_provincia;
    private $decripcion_provincia;
    private $sexo_usuario;
    private $clave_usuario;

    function getCodigo_usuario()
    {
        return $this->codigo_usuario;
    }

    function setCodigo_usuario($codigo_usuario)
    {
        $this->codigo_usuario = $codigo_usuario;
    }

    function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    function setNombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }

    function  getApellido_usuario()
    {
        return $this->apellido_usuario;
    }

    function setApellido_usuario($apellido_usuario)
    {
        $this->apellido_usuario = $apellido_usuario;
    }

    function getDni_usuario()
    {
        return $this->dni_usuario;
    }

    function setDni_usuario($dni_usuario)
    {
        $this->dni_usuario = $dni_usuario;
    }

    function  getCorreo_usuario()
    {
        return $this->correo_usuario;
    }

    function  setCorreo_usuario($correo_usuario)
    {
        $this->correo_usuario = $correo_usuario;
    }

    function  getCelular_usuario()
    {
        return $this->celular_usuario;
    }

    function  setCelular_usuario($celular_usuario)
    {
        $this->celular_usuario = $celular_usuario;
    }

    function getDireccion_usuario()
    {
        return $this->direccion_usuario;
    }

    function  setDireccion_usuario($direccion_usuario)
    {
        $this->direccion_usuario = $direccion_usuario;
    }

    function getEstado_usuario()
    {
        return $this->estado_usuario;
    }

    function  setEstado_usuario($estado_usuario)
    {
        $this->estado_usuario = $estado_usuario;
    }

    function getFecha_registro_usuario()
    {
        return $this->fecha_registro_usuario;
    }

    function  setFecha_registro_usuario($fecha_registro_usuario)
    {
        $this->fecha_registro_usuario = $fecha_registro_usuario;
    }
    function getCodigo_tipo_usario()
    {
        return $this->codigo_tipo_usario;
    }

    function setCodigo_tipo_usario($codigo_tipo_usario)
    {
        $this->codigo_tipo_usario = $codigo_tipo_usario;
    }
    function getTipo_usuario()
    {
        return $this->tipo_usuario;
    }

    function setTipo_usuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;
    }
    function getCodigo_provincia()
    {
        return $this->codigo_provincia;
    }

    function setCodigo_provincia($codigo_provincia)
    {
        $this->codigo_provincia = $codigo_provincia;
    }
    function getDecripcion_provincia()
    {
        return $this->decripcion_provincia;
    }

    function setDecripcion_provincia($decripcion_provincia)
    {
        $this->decripcion_provincia = $decripcion_provincia;
    }
    function getSexo_usuario()
    {
        return $this->sexo_usuario;
    }

    function setSexo_usuario($sexo_usuario)
    {
        $this->sexo_usuario = $sexo_usuario;
    }
    function getClave_usuario()
    {
        return $this->clave_usuario;
    }

    function setClave_usuario($clave_usuario)
    {
        $this->clave_usuario = $clave_usuario;
    }

    function insertarUsuario()
    {
        $conexion = conectarBD();
        $sql = "INSERT INTO public.usuario(id_provincia, nombre_usuario, apellido_usuario, dni_usuario, correo_usuario, celular_usuario, direccion_usuario, clave_usuario, sexo_usuario)";
        $sql .= "values('86','" . $this->getNombre_usuario() . "','" . $this->getApellido_usuario() . "','" . $this->getDni_usuario() . "','" . $this->getCorreo_usuario() . "','" . $this->getCelular_usuario() . "','" . $this->getDireccion_usuario() . "','" . $this->getClave_usuario() . "','" . $this->getSexo_usuario() . "')";
        //return $sql;
        $resultado = pg_query($conexion, $sql);
        if ($resultado) {
            header('Location:../index.php?r=1');
        } else {
            header('Location:../index.php?r=0');
        }
    }
}
