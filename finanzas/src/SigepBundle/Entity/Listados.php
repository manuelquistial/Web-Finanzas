<?php

namespace SigepBundle\Entity;

/**
 * Listados
 */
class Listados
{
    /**
     * @var string
     */
    private $nombre = '';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Dependencias
     */
    private $dependencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $movimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Listados
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
     * Set dependencia
     *
     * @param \SigepBundle\Entity\Dependencias $dependencia
     *
     * @return Listados
     */
    public function setDependencia(\SigepBundle\Entity\Dependencias $dependencia = null)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return \SigepBundle\Entity\Dependencias
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * Add movimiento
     *
     * @param \SigepBundle\Entity\Movimientos $movimiento
     *
     * @return Listados
     */
    public function addMovimiento(\SigepBundle\Entity\Movimientos $movimiento)
    {
        $this->movimiento[] = $movimiento;

        return $this;
    }

    /**
     * Remove movimiento
     *
     * @param \SigepBundle\Entity\Movimientos $movimiento
     */
    public function removeMovimiento(\SigepBundle\Entity\Movimientos $movimiento)
    {
        $this->movimiento->removeElement($movimiento);
    }

    /**
     * Get movimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }
}
