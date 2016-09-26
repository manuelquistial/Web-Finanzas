<?php

namespace SigepBundle\Entity;

/**
 * Verificaciones
 */
class Verificaciones
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var float
     */
    private $cumplimiento = '0.00';

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $limitaciones;

    /**
     * @var string
     */
    private $conclusiones;

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
     * @var \SigepBundle\Entity\Metas
     */
    private $meta;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $realizacion;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Verificaciones
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
     * @param float $cumplimiento
     *
     * @return Verificaciones
     */
    public function setCumplimiento($cumplimiento)
    {
        $this->cumplimiento = $cumplimiento;

        return $this;
    }

    /**
     * Get cumplimiento
     *
     * @return float
     */
    public function getCumplimiento()
    {
        return $this->cumplimiento;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Verificaciones
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
     * Set limitaciones
     *
     * @param string $limitaciones
     *
     * @return Verificaciones
     */
    public function setLimitaciones($limitaciones)
    {
        $this->limitaciones = $limitaciones;

        return $this;
    }

    /**
     * Get limitaciones
     *
     * @return string
     */
    public function getLimitaciones()
    {
        return $this->limitaciones;
    }

    /**
     * Set conclusiones
     *
     * @param string $conclusiones
     *
     * @return Verificaciones
     */
    public function setConclusiones($conclusiones)
    {
        $this->conclusiones = $conclusiones;

        return $this;
    }

    /**
     * Get conclusiones
     *
     * @return string
     */
    public function getConclusiones()
    {
        return $this->conclusiones;
    }

    /**
     * Set recomendaciones
     *
     * @param string $recomendaciones
     *
     * @return Verificaciones
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
     * @return Verificaciones
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
     * @return Verificaciones
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
     * Set meta
     *
     * @param \SigepBundle\Entity\Metas $meta
     *
     * @return Verificaciones
     */
    public function setMeta(\SigepBundle\Entity\Metas $meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Get meta
     *
     * @return \SigepBundle\Entity\Metas
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set realizacion
     *
     * @param \SigepBundle\Entity\Personas $realizacion
     *
     * @return Verificaciones
     */
    public function setRealizacion(\SigepBundle\Entity\Personas $realizacion = null)
    {
        $this->realizacion = $realizacion;

        return $this;
    }

    /**
     * Get realizacion
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getRealizacion()
    {
        return $this->realizacion;
    }
}
