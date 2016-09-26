<?php

namespace SigepBundle\Entity;

/**
 * Propuestas
 */
class Propuestas
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $aprobada;

    /**
     * @var string
     */
    private $causaNoAprobacion;

    /**
     * @var string
     */
    private $presentada;

    /**
     * @var string
     */
    private $causaNoPresentacion;

    /**
     * @var integer
     */
    private $valor = '0';

    /**
     * @var \DateTime
     */
    private $registro;

    /**
     * @var \DateTime
     */
    private $entregacentro;

    /**
     * @var \DateTime
     */
    private $entregaentidad;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Oportunidades
     */
    private $oportunidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $persona;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Propuestas
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
     * Set aprobada
     *
     * @param string $aprobada
     *
     * @return Propuestas
     */
    public function setAprobada($aprobada)
    {
        $this->aprobada = $aprobada;

        return $this;
    }

    /**
     * Get aprobada
     *
     * @return string
     */
    public function getAprobada()
    {
        return $this->aprobada;
    }

    /**
     * Set causaNoAprobacion
     *
     * @param string $causaNoAprobacion
     *
     * @return Propuestas
     */
    public function setCausaNoAprobacion($causaNoAprobacion)
    {
        $this->causaNoAprobacion = $causaNoAprobacion;

        return $this;
    }

    /**
     * Get causaNoAprobacion
     *
     * @return string
     */
    public function getCausaNoAprobacion()
    {
        return $this->causaNoAprobacion;
    }

    /**
     * Set presentada
     *
     * @param string $presentada
     *
     * @return Propuestas
     */
    public function setPresentada($presentada)
    {
        $this->presentada = $presentada;

        return $this;
    }

    /**
     * Get presentada
     *
     * @return string
     */
    public function getPresentada()
    {
        return $this->presentada;
    }

    /**
     * Set causaNoPresentacion
     *
     * @param string $causaNoPresentacion
     *
     * @return Propuestas
     */
    public function setCausaNoPresentacion($causaNoPresentacion)
    {
        $this->causaNoPresentacion = $causaNoPresentacion;

        return $this;
    }

    /**
     * Get causaNoPresentacion
     *
     * @return string
     */
    public function getCausaNoPresentacion()
    {
        return $this->causaNoPresentacion;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return Propuestas
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     *
     * @return Propuestas
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return \DateTime
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set entregacentro
     *
     * @param \DateTime $entregacentro
     *
     * @return Propuestas
     */
    public function setEntregacentro($entregacentro)
    {
        $this->entregacentro = $entregacentro;

        return $this;
    }

    /**
     * Get entregacentro
     *
     * @return \DateTime
     */
    public function getEntregacentro()
    {
        return $this->entregacentro;
    }

    /**
     * Set entregaentidad
     *
     * @param \DateTime $entregaentidad
     *
     * @return Propuestas
     */
    public function setEntregaentidad($entregaentidad)
    {
        $this->entregaentidad = $entregaentidad;

        return $this;
    }

    /**
     * Get entregaentidad
     *
     * @return \DateTime
     */
    public function getEntregaentidad()
    {
        return $this->entregaentidad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Propuestas
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set oportunidad
     *
     * @param \SigepBundle\Entity\Oportunidades $oportunidad
     *
     * @return Propuestas
     */
    public function setOportunidad(\SigepBundle\Entity\Oportunidades $oportunidad = null)
    {
        $this->oportunidad = $oportunidad;

        return $this;
    }

    /**
     * Get oportunidad
     *
     * @return \SigepBundle\Entity\Oportunidades
     */
    public function getOportunidad()
    {
        return $this->oportunidad;
    }

    /**
     * Add persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return Propuestas
     */
    public function addPersona(\SigepBundle\Entity\Personas $persona)
    {
        $this->persona[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     */
    public function removePersona(\SigepBundle\Entity\Personas $persona)
    {
        $this->persona->removeElement($persona);
    }

    /**
     * Get persona
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersona()
    {
        return $this->persona;
    }
}
