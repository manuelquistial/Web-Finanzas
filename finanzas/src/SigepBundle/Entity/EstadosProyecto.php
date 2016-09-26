<?php

namespace SigepBundle\Entity;

/**
 * EstadosProyecto
 */
class EstadosProyecto
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $codigo;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return EstadosProyecto
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}

