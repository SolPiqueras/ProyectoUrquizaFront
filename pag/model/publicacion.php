<?php

class Publicacion
{
    private $id_publicacion;
    private $titulo;
    private $imagen;
    private $descripcion;
    private $persona_cuil;
    private $fechaHora;

    public function __construct($id_publicacion, $persona_cuil, $titulo, $imagen, $descripcion, $fechaHora)
    {
        $this->id_publicacion = $id_publicacion;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->persona_cuil = $persona_cuil;
        $this->fechaHora = $fechaHora;
    }

    public function getIdPublicacion()
    {
        return $this->id_publicacion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getPersonaCuil()
    {
        return $this->persona_cuil;
    }

    public function getFecha()
    {
        return $this->fechaHora;
    }
}
