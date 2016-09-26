<?php

namespace SigepBundle\Entity;

/**
 * TiposContribuyente
 */
class TiposContribuyente
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $codigo;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TiposContribuyente
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
