<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresAspectos
 */
class IndicadoresAspectos
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var boolean
     */
    private $habilitado = '1';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $encuesta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->encuesta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return IndicadoresAspectos
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
     * @param boolean $habilitado
     *
     * @return IndicadoresAspectos
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
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
     * @return IndicadoresAspectos
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
     * Add encuestum
     *
     * @param \SigepBundle\Entity\IndicadoresEncuestaPs $encuestum
     *
     * @return IndicadoresAspectos
     */
    public function addEncuestum(\SigepBundle\Entity\IndicadoresEncuestaPs $encuestum)
    {
        $this->encuesta[] = $encuestum;

        return $this;
    }

    /**
     * Remove encuestum
     *
     * @param \SigepBundle\Entity\IndicadoresEncuestaPs $encuestum
     */
    public function removeEncuestum(\SigepBundle\Entity\IndicadoresEncuestaPs $encuestum)
    {
        $this->encuesta->removeElement($encuestum);
    }

    /**
     * Get encuesta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEncuesta()
    {
        return $this->encuesta;
    }
}

