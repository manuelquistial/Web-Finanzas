<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresCompras
 */
class IndicadoresCompras
{
    /**
     * @var string
     */
    private $insumo;

    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var integer
     */
    private $mesEsperado;

    /**
     * @var integer
     */
    private $anioEsperado;

    /**
     * @var \DateTime
     */
    private $fechaRecepcion;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set insumo
     *
     * @param string $insumo
     *
     * @return IndicadoresCompras
     */
    public function setInsumo($insumo)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return string
     */
    public function getInsumo()
    {
        return $this->insumo;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     *
     * @return IndicadoresCompras
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set mesEsperado
     *
     * @param integer $mesEsperado
     *
     * @return IndicadoresCompras
     */
    public function setMesEsperado($mesEsperado)
    {
        $this->mesEsperado = $mesEsperado;

        return $this;
    }

    /**
     * Get mesEsperado
     *
     * @return integer
     */
    public function getMesEsperado()
    {
        return $this->mesEsperado;
    }

    /**
     * Set anioEsperado
     *
     * @param integer $anioEsperado
     *
     * @return IndicadoresCompras
     */
    public function setAnioEsperado($anioEsperado)
    {
        $this->anioEsperado = $anioEsperado;

        return $this;
    }

    /**
     * Get anioEsperado
     *
     * @return integer
     */
    public function getAnioEsperado()
    {
        return $this->anioEsperado;
    }

    /**
     * Set fechaRecepcion
     *
     * @param \DateTime $fechaRecepcion
     *
     * @return IndicadoresCompras
     */
    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

    /**
     * Get fechaRecepcion
     *
     * @return \DateTime
     */
    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
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
     * @return IndicadoresCompras
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
}

