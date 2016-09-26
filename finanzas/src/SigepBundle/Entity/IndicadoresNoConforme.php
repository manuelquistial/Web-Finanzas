<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresNoConforme
 */
class IndicadoresNoConforme
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $otro;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\IndicadoresProductos
     */
    private $producto;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return IndicadoresNoConforme
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
     * Set otro
     *
     * @param string $otro
     *
     * @return IndicadoresNoConforme
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    /**
     * Get otro
     *
     * @return string
     */
    public function getOtro()
    {
        return $this->otro;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return IndicadoresNoConforme
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
     * @return IndicadoresNoConforme
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
     * Set persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return IndicadoresNoConforme
     */
    public function setPersona(\SigepBundle\Entity\Personas $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set producto
     *
     * @param \SigepBundle\Entity\IndicadoresProductos $producto
     *
     * @return IndicadoresNoConforme
     */
    public function setProducto(\SigepBundle\Entity\IndicadoresProductos $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \SigepBundle\Entity\IndicadoresProductos
     */
    public function getProducto()
    {
        return $this->producto;
    }
}
