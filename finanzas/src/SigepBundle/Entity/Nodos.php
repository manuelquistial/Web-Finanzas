<?php

namespace SigepBundle\Entity;

/**
 * Nodos
 */
class Nodos
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
     * @var \SigepBundle\Entity\Nodos
     */
    private $padre;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Nodos
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

    /**
     * Set padre
     *
     * @param \SigepBundle\Entity\Nodos $padre
     *
     * @return Nodos
     */
    public function setPadre(\SigepBundle\Entity\Nodos $padre = null)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return \SigepBundle\Entity\Nodos
     */
    public function getPadre()
    {
        return $this->padre;
    }
}
