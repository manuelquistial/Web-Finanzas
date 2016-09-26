<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresEncuestaPs
 */
class IndicadoresEncuestaPs
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $cliente;

    /**
     * @var \SigepBundle\Entity\IndicadoresServicios
     */
    private $servicio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aspecto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aspecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return IndicadoresEncuestaPs
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * @return IndicadoresEncuestaPs
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
     * Set cliente
     *
     * @param \SigepBundle\Entity\Personas $cliente
     *
     * @return IndicadoresEncuestaPs
     */
    public function setCliente(\SigepBundle\Entity\Personas $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set servicio
     *
     * @param \SigepBundle\Entity\IndicadoresServicios $servicio
     *
     * @return IndicadoresEncuestaPs
     */
    public function setServicio(\SigepBundle\Entity\IndicadoresServicios $servicio = null)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return \SigepBundle\Entity\IndicadoresServicios
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Add aspecto
     *
     * @param \SigepBundle\Entity\IndicadoresAspectos $aspecto
     *
     * @return IndicadoresEncuestaPs
     */
    public function addAspecto(\SigepBundle\Entity\IndicadoresAspectos $aspecto)
    {
        $this->aspecto[] = $aspecto;

        return $this;
    }

    /**
     * Remove aspecto
     *
     * @param \SigepBundle\Entity\IndicadoresAspectos $aspecto
     */
    public function removeAspecto(\SigepBundle\Entity\IndicadoresAspectos $aspecto)
    {
        $this->aspecto->removeElement($aspecto);
    }

    /**
     * Get aspecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAspecto()
    {
        return $this->aspecto;
    }
}

