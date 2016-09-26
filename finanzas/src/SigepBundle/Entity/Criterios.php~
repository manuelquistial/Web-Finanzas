<?php

namespace SigepBundle\Entity;

/**
 * Criterios
 */
class Criterios
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $habilitado = '0';

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Criterios
     */
    private $padre;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Criterios
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
     * Set habilitado
     *
     * @param string $habilitado
     *
     * @return Criterios
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return string
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Criterios
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
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
     * Set proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return Criterios
     */
    public function setProyecto(\SigepBundle\Entity\Proyectos $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \SigepBundle\Entity\Proyectos
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Set padre
     *
     * @param \SigepBundle\Entity\Criterios $padre
     *
     * @return Criterios
     */
    public function setPadre(\SigepBundle\Entity\Criterios $padre = null)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return \SigepBundle\Entity\Criterios
     */
    public function getPadre()
    {
        return $this->padre;
    }
}
