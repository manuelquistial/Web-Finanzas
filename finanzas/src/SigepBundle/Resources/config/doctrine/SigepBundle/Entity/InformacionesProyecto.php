<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionesProyecto
 *
 * @ORM\Table(name="informaciones_proyecto", indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="financiador", columns={"financiador"}), @ORM\Index(name="codigo_operacion", columns={"codigo_operacion"})})
 * @ORM\Entity
 */
class InformacionesProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date", nullable=true)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date", nullable=true)
     */
    private $fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="bigint", nullable=false)
     */
    private $valor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=15, nullable=true)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="objeto", type="text", length=16777215, nullable=true)
     */
    private $objeto;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_operacion", type="integer", nullable=true)
     */
    private $codigoOperacion;

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

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="financiador", referencedColumnName="Identificacion")
     * })
     */
    private $financiador;


}

