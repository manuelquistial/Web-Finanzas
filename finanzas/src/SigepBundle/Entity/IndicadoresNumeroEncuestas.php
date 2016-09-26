<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresNumeroEncuestas
 */
class IndicadoresNumeroEncuestas
{
    /**
     * @var integer
     */
    private $cantidad = '0';

    /**
     * @var integer
     */
    private $anio;

    /**
     * @var integer
     */
    private $mes;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return IndicadoresNumeroEncuestas
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
     * Set anio
     *
     * @param integer $anio
     *
     * @return IndicadoresNumeroEncuestas
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
     * Set mes
     *
     * @param integer $mes
     *
     * @return IndicadoresNumeroEncuestas
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
     * Set proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return IndicadoresNumeroEncuestas
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
