<?php

namespace SigepBundle\Entity;

/**
 * Actividades
 */
class Actividades
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $inicio;

    /**
     * @var \DateTime
     */
    private $fin;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Metas
     */
    private $meta;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Actividades
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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Actividades
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Actividades
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Actividades
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
     * Set meta
     *
     * @param \SigepBundle\Entity\Metas $meta
     *
     * @return Actividades
     */
    public function setMeta(\SigepBundle\Entity\Metas $meta = null)
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
     * Add participante
     *
     * @param \SigepBundle\Entity\Participantes $participante
     *
     * @return Actividades
     */
    public function addParticipante(\SigepBundle\Entity\Participantes $participante)
    {
        $this->participante[] = $participante;

        return $this;
    }

    /**
     * Remove participante
     *
     * @param \SigepBundle\Entity\Participantes $participante
     */
    public function removeParticipante(\SigepBundle\Entity\Participantes $participante)
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
