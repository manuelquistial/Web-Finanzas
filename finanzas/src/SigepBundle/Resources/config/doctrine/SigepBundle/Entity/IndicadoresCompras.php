<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresCompras
 *
 * @ORM\Table(name="indicadores_compras", indexes={@ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresCompras
{
    /**
     * @var string
     *
     * @ORM\Column(name="insumo", type="string", length=150, nullable=false)
     */
    private $insumo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solicitud", type="date", nullable=false)
     */
    private $fechaSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes_esperado", type="integer", nullable=false)
     */
    private $mesEsperado;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_esperado", type="integer", nullable=false)
     */
    private $anioEsperado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_recepcion", type="date", nullable=true)
     */
    private $fechaRecepcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     * })
     */
    private $proyecto;


}

