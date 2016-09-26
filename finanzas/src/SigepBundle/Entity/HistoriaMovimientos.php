<?php

namespace SigepBundle\Entity;

/**
 * HistoriaMovimientos
 */
class HistoriaMovimientos
{
    /**
     * @var integer
     */
    private $valorAnterior;

    /**
     * @var integer
     */
    private $diferencia;

    /**
     * @var integer
     */
    private $operacion;

    /**
     * @var integer
     */
    private $codigoOperacion;

    /**
     * @var \DateTime
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Movimientos
     */
    private $movimiento;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $usuario;


    /**
     * Set valorAnterior
     *
     * @param integer $valorAnterior
     *
     * @return HistoriaMovimientos
     */
    public function setValorAnterior($valorAnterior)
    {
        $this->valorAnterior = $valorAnterior;

        return $this;
    }

    /**
     * Get valorAnterior
     *
     * @return integer
     */
    public function getValorAnterior()
    {
        return $this->valorAnterior;
    }

    /**
     * Set diferencia
     *
     * @param integer $diferencia
     *
     * @return HistoriaMovimientos
     */
    public function setDiferencia($diferencia)
    {
        $this->diferencia = $diferencia;

        return $this;
    }

    /**
     * Get diferencia
     *
     * @return integer
     */
    public function getDiferencia()
    {
        return $this->diferencia;
    }

    /**
     * Set operacion
     *
     * @param integer $operacion
     *
     * @return HistoriaMovimientos
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return integer
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set codigoOperacion
     *
     * @param integer $codigoOperacion
     *
     * @return HistoriaMovimientos
     */
    public function setCodigoOperacion($codigoOperacion)
    {
        $this->codigoOperacion = $codigoOperacion;

        return $this;
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return HistoriaMovimientos
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set movimiento
     *
     * @param \SigepBundle\Entity\Movimientos $movimiento
     *
     * @return HistoriaMovimientos
     */
    public function setMovimiento(\SigepBundle\Entity\Movimientos $movimiento = null)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return \SigepBundle\Entity\Movimientos
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }

    /**
     * Set usuario
     *
     * @param \SigepBundle\Entity\Personas $usuario
     *
     * @return HistoriaMovimientos
     */
    public function setUsuario(\SigepBundle\Entity\Personas $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}

