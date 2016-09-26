<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudes
 *
 * @ORM\Table(name="solicitudes", indexes={@ORM\Index(name="responsable", columns={"responsable"}), @ORM\Index(name="solicitante", columns={"solicitante"}), @ORM\Index(name="tipo", columns={"tipo"})})
 * @ORM\Entity
 */
class Solicitudes
{
    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=250, nullable=false)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSolicitud", type="date", nullable=false)
     */
    private $fechasolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCierre", type="date", nullable=true)
     */
    private $fechacierre;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20, nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaSolicitud", type="time", nullable=false)
     */
    private $horasolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaCierre", type="time", nullable=true)
     */
    private $horacierre;

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
     *   @ORM\JoinColumn(name="responsable", referencedColumnName="Identificacion")
     * })
     */
    private $responsable;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solicitante", referencedColumnName="Identificacion")
     * })
     */
    private $solicitante;

    /**
     * @var \SigepBundle\Entity\TiposSolicitud
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposSolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="codigo")
     * })
     */
    private $tipo;


}

