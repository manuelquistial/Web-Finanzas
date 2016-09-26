<?php

namespace SigepBundle\Entity;

/**
 * Solicitudes
 */
class Solicitudes
{
    /**
     * @var string
     */
    private $asunto;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechasolicitud;

    /**
     * @var \DateTime
     */
    private $fechacierre;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $horasolicitud;

    /**
     * @var \DateTime
     */
    private $horacierre;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $responsable;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $solicitante;

    /**
     * @var \SigepBundle\Entity\TiposSolicitud
     */
    private $tipo;


    /**
     * Set asunto
     *
     * @param string $asunto
     *
     * @return Solicitudes
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Solicitudes
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
     * Set fechasolicitud
     *
     * @param \DateTime $fechasolicitud
     *
     * @return Solicitudes
     */
    public function setFechasolicitud($fechasolicitud)
    {
        $this->fechasolicitud = $fechasolicitud;

        return $this;
    }

    /**
     * Get fechasolicitud
     *
     * @return \DateTime
     */
    public function getFechasolicitud()
    {
        return $this->fechasolicitud;
    }

    /**
     * Set fechacierre
     *
     * @param \DateTime $fechacierre
     *
     * @return Solicitudes
     */
    public function setFechacierre($fechacierre)
    {
        $this->fechacierre = $fechacierre;

        return $this;
    }

    /**
     * Get fechacierre
     *
     * @return \DateTime
     */
    public function getFechacierre()
    {
        return $this->fechacierre;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Solicitudes
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set horasolicitud
     *
     * @param \DateTime $horasolicitud
     *
     * @return Solicitudes
     */
    public function setHorasolicitud($horasolicitud)
    {
        $this->horasolicitud = $horasolicitud;

        return $this;
    }

    /**
     * Get horasolicitud
     *
     * @return \DateTime
     */
    public function getHorasolicitud()
    {
        return $this->horasolicitud;
    }

    /**
     * Set horacierre
     *
     * @param \DateTime $horacierre
     *
     * @return Solicitudes
     */
    public function setHoracierre($horacierre)
    {
        $this->horacierre = $horacierre;

        return $this;
    }

    /**
     * Get horacierre
     *
     * @return \DateTime
     */
    public function getHoracierre()
    {
        return $this->horacierre;
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
     * Set responsable
     *
     * @param \SigepBundle\Entity\Personas $responsable
     *
     * @return Solicitudes
     */
    public function setResponsable(\SigepBundle\Entity\Personas $responsable = null)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set solicitante
     *
     * @param \SigepBundle\Entity\Personas $solicitante
     *
     * @return Solicitudes
     */
    public function setSolicitante(\SigepBundle\Entity\Personas $solicitante = null)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Set tipo
     *
     * @param \SigepBundle\Entity\TiposSolicitud $tipo
     *
     * @return Solicitudes
     */
    public function setTipo(\SigepBundle\Entity\TiposSolicitud $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \SigepBundle\Entity\TiposSolicitud
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
