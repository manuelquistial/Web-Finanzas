<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresCapacitaciones
 */
class IndicadoresCapacitaciones
{
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
    private $intensidad;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\IndicadoresCursos
     */
    private $curso;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $facilitador;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participante;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participante = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return IndicadoresCapacitaciones
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
     * @return IndicadoresCapacitaciones
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
     * Set intensidad
     *
     * @param integer $intensidad
     *
     * @return IndicadoresCapacitaciones
     */
    public function setIntensidad($intensidad)
    {
        $this->intensidad = $intensidad;

        return $this;
    }

    /**
     * Get intensidad
     *
     * @return integer
     */
    public function getIntensidad()
    {
        return $this->intensidad;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return IndicadoresCapacitaciones
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
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
     * Set curso
     *
     * @param \SigepBundle\Entity\IndicadoresCursos $curso
     *
     * @return IndicadoresCapacitaciones
     */
    public function setCurso(\SigepBundle\Entity\IndicadoresCursos $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \SigepBundle\Entity\IndicadoresCursos
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set facilitador
     *
     * @param \SigepBundle\Entity\Personas $facilitador
     *
     * @return IndicadoresCapacitaciones
     */
    public function setFacilitador(\SigepBundle\Entity\Personas $facilitador = null)
    {
        $this->facilitador = $facilitador;

        return $this;
    }

    /**
     * Get facilitador
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getFacilitador()
    {
        return $this->facilitador;
    }

    /**
     * Add participante
     *
     * @param \SigepBundle\Entity\Personas $participante
     *
     * @return IndicadoresCapacitaciones
     */
    public function addParticipante(\SigepBundle\Entity\Personas $participante)
    {
        $this->participante[] = $participante;

        return $this;
    }

    /**
     * Remove participante
     *
     * @param \SigepBundle\Entity\Personas $participante
     */
    public function removeParticipante(\SigepBundle\Entity\Personas $participante)
    {
        $this->participante->removeElement($participante);
    }

    /**
     * Get participante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipante()
    {
        return $this->participante;
    }
}

