<?php

namespace SigepBundle\Entity;

/**
 * Movimientos
 */
class Movimientos
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $valor = '0';

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var integer
     */
    private $codigoOperacion;

    /**
     * @var integer
     */
    private $iva = '0';

    /**
     * @var boolean
     */
    private $devuelto = '0';

    /**
     * @var \DateTime
     */
    private $fechaDevolucion;

    /**
     * @var boolean
     */
    private $habilitado = '1';

    /**
     * @var \DateTime
     */
    private $fechaRegistro;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Rubros
     */
    private $rubro;

    /**
     * @var \SigepBundle\Entity\CentrosCosto
     */
    private $centrocosto;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\TiposMovimiento
     */
    private $tipo;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\Movimientos
     */
    private $reserva;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $usuarioRegistro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $listado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listado = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Get codigoOperacion
     *
     * @return integer
     */
    public function getCodigoOperacion()
    {
        return $this->codigoOperacion;
    }

    /**
     * Get iva
     *
     * @return integer
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Get devuelto
     *
     * @return boolean
     */
    public function getDevuelto()
    {
        return $this->devuelto;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Get habilitado
     *
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
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
     * Get rubro
     *
     * @return \SigepBundle\Entity\Rubros
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Get centrocosto
     *
     * @return \SigepBundle\Entity\CentrosCosto
     */
    public function getCentrocosto()
    {
        return $this->centrocosto;
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
     * Get tipo
     *
     * @return \SigepBundle\Entity\TiposMovimiento
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Get reserva
     *
     * @return \SigepBundle\Entity\Movimientos
     */
    public function getReserva()
    {
        return $this->reserva;
    }


    /**
     * Get usuarioRegistro
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getUsuarioRegistro()
    {
        return $this->usuarioRegistro;
    }


    /**
     * Get listado
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListado()
    {
        return $this->listado;
    }
}
