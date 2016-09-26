<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PuntosControl
 *
 * @ORM\Table(name="puntos_control", indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="compromiso", columns={"compromiso"})})
 * @ORM\Entity
 */
class PuntosControl
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=true)
     */
    private $hora;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlerta", type="date", nullable=true)
     */
    private $fechaalerta;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=100, nullable=true)
     */
    private $asunto;

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
     * @var \SigepBundle\Entity\Compromisos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Compromisos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compromiso", referencedColumnName="codigo")
     * })
     */
    private $compromiso;


}

