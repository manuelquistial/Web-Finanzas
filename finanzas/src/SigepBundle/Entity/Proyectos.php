<?php

namespace SigepBundle\Entity;

/**
 * Proyectos
 */
class Proyectos
{
    /**
     * @var string
     */
    private $codificacion = '';

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $descriptores;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\EstadosProyecto
     */
    private $estado;


    /**
     * Set codificacion
     *
     * @param string $codificacion
     *
     * @return Proyectos
     */
    public function setCodificacion($codificacion)
    {
        $this->codificacion = $codificacion;

        return $this;
    }

    /**
     * Get codificacion
     *
     * @return string
     */
    public function getCodificacion()
    {
        return $this->codificacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyectos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyectos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set descriptores
     *
     * @param string $descriptores
     *
     * @return Proyectos
     */
    public function setDescriptores($descriptores)
    {
        $this->descriptores = $descriptores;

        return $this;
    }

    /**
     * Get descriptores
     *
     * @return string
     */
    public function getDescriptores()
    {
        return $this->descriptores;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Proyectos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Proyectos
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set estado
     *
     * @param \SigepBundle\Entity\EstadosProyecto $estado
     *
     * @return Proyectos
     */
    public function setEstado(\SigepBundle\Entity\EstadosProyecto $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \SigepBundle\Entity\EstadosProyecto
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @var string
     */
    private $convocatoria = 'Desconocido';

    /**
     * Set convocatoria
     *
     * @param string $convocatoria
     *
     * @return Proyectos
     */
    public function setConvocatoria($convocatoria)
    {
        $this->convocatoria = $convocatoria;

        return $this;
    }

    /**
     * Get convocatoria
     *
     * @return string
     */
    public function getConvocatoria()
    {
        return $this->convocatoria;
    }
}
