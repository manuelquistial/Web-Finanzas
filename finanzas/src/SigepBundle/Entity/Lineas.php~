<?php

namespace SigepBundle\Entity;

/**
 * Lineas
 */
class Lineas
{
    /**
     * @var string
     */
    private $nombre = '';

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Lineas
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
     * @return Lineas
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

    /**
     * Add grupo
     *
     * @param \SigepBundle\Entity\Grupos $grupo
     *
     * @return Lineas
     */
    public function addGrupo(\SigepBundle\Entity\Grupos $grupo)
    {
        $this->grupo[] = $grupo;

        return $this;
    }

    /**
     * Remove grupo
     *
     * @param \SigepBundle\Entity\Grupos $grupo
     */
    public function removeGrupo(\SigepBundle\Entity\Grupos $grupo)
    {
        $this->grupo->removeElement($grupo);
    }

    /**
     * Get grupo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
