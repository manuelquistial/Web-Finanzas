<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresQrs
 *
 * @ORM\Table(name="indicadores_qrs", indexes={@ORM\Index(name="persona", columns={"persona"}), @ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresQrs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="smallint", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="procesada", type="boolean", nullable=false)
     */
    private $procesada = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     * })
     */
    private $persona;

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

