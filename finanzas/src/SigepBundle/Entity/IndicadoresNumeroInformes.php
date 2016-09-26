<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresNumeroInformes
 */
class IndicadoresNumeroInformes
{
    /**
     * @var integer
     */
    private $cantidad = '0';

    /**
     * @var integer
     */
    private $mes;

    /**
     * @var integer
     */
    private $anio;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return IndicadoresNumeroInformes
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     *
     * @return IndicadoresNumeroInformes
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     *
     * @return IndicadoresNumeroInformes
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return IndicadoresNumeroInformes
     */
    public function setProyecto(\SigepBundle\Entity\Proyectos $proyecto)
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
}
