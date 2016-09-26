<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriaMovimientos
 *
 * @ORM\Table(name="historia_movimientos", indexes={@ORM\Index(name="movimiento", columns={"movimiento"}), @ORM\Index(name="usuario", columns={"usuario"})})
 * @ORM\Entity
 */
class HistoriaMovimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="valor_anterior", type="bigint", nullable=true)
     */
    private $valorAnterior;

    /**
     * @var integer
     *
     * @ORM\Column(name="diferencia", type="bigint", nullable=true)
     */
    private $diferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="operacion", type="integer", nullable=true)
     */
    private $operacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_operacion", type="integer", nullable=true)
     */
    private $codigoOperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Movimientos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Movimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movimiento", referencedColumnName="Codigo")
     * })
     */
    private $movimiento;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="Identificacion")
     * })
     */
    private $usuario;


}

