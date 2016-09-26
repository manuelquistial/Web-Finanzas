<?php

namespace SigepBundle\Entity;

/**
 * TiposGrupo
 */
class TiposGrupo
{
    /**
     * @var string
     */
    private $nombre = '';

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var integer
     */
    private $codigo;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TiposGrupo
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return TiposGrupo
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
