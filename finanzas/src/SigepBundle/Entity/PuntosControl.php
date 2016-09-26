<?php

namespace SigepBundle\Entity;

/**
 * PuntosControl
 */
class PuntosControl
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \DateTime
     */
    private $hora;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fechaalerta;

    /**
     * @var string
     */
    private $asunto;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Compromisos
     */
    private $compromiso;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return PuntosControl
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return PuntosControl
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
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return PuntosControl
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return PuntosControl
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechaalerta
     *
     * @param \DateTime $fechaalerta
     *
     * @return PuntosControl
     */
    public function setFechaalerta($fechaalerta)
    {
        $this->fechaalerta = $fechaalerta;

        return $this;
    }

    /**
     * Get fechaalerta
     *
     * @return \DateTime
     */
    public function getFechaalerta()
    {
        return $this->fechaalerta;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     *
     * @return PuntosControl
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
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
     * @return PuntosControl
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
     * Set compromiso
     *
     * @param \SigepBundle\Entity\Compromisos $compromiso
     *
     * @return PuntosControl
     */
    public function setCompromiso(\SigepBundle\Entity\Compromisos $compromiso = null)
    {
        $this->compromiso = $compromiso;

        return $this;
    }

    /**
     * Get compromiso
     *
     * @return \SigepBundle\Entity\Compromisos
     */
    public function getCompromiso()
    {
        return $this->compromiso;
    }
}
