<?php

namespace SigepBundle\Entity;

/**
 * Validaciones
 */
class Validaciones
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $cumplimiento = '0';

    /**
     * @var string
     */
    private $fuente;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $recomendaciones;

    /**
     * @var boolean
     */
    private $mes;

    /**
     * @var integer
     */
    private $anio;

    /**
     * @var \SigepBundle\Entity\Criterios
     */
    private $criterio;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $realizado;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Validaciones
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
     * Set cumplimiento
     *
     * @param string $cumplimiento
     *
     * @return Validaciones
     */
    public function setCumplimiento($cumplimiento)
    {
        $this->cumplimiento = $cumplimiento;

        return $this;
    }

    /**
     * Get cumplimiento
     *
     * @return string
     */
    public function getCumplimiento()
    {
        return $this->cumplimiento;
    }

    /**
     * Set fuente
     *
     * @param string $fuente
     *
     * @return Validaciones
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;

        return $this;
    }

    /**
     * Get fuente
     *
     * @return string
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Validaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set recomendaciones
     *
     * @param string $recomendaciones
     *
     * @return Validaciones
     */
    public function setRecomendaciones($recomendaciones)
    {
        $this->recomendaciones = $recomendaciones;

        return $this;
    }

    /**
     * Get recomendaciones
     *
     * @return string
     */
    public function getRecomendaciones()
    {
        return $this->recomendaciones;
    }

    /**
     * Set mes
     *
     * @param boolean $mes
     *
     * @return Validaciones
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return boolean
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
     * @return Validaciones
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
     * Set criterio
     *
     * @param \SigepBundle\Entity\Criterios $criterio
     *
     * @return Validaciones
     */
    public function setCriterio(\SigepBundle\Entity\Criterios $criterio)
    {
        $this->criterio = $criterio;

        return $this;
    }

    /**
     * Get criterio
     *
     * @return \SigepBundle\Entity\Criterios
     */
    public function getCriterio()
    {
        return $this->criterio;
    }

    /**
     * Set realizado
     *
     * @param \SigepBundle\Entity\Personas $realizado
     *
     * @return Validaciones
     */
    public function setRealizado(\SigepBundle\Entity\Personas $realizado = null)
    {
        $this->realizado = $realizado;

        return $this;
    }

    /**
     * Get realizado
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getRealizado()
    {
        return $this->realizado;
    }
}
