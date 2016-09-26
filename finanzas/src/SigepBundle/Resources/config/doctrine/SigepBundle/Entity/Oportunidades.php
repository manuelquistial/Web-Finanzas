<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oportunidades
 *
 * @ORM\Table(name="oportunidades", indexes={@ORM\Index(name="FK_oportunidades_ubicaciones", columns={"ciudad"}), @ORM\Index(name="FK_oportunidades_modalidades", columns={"modalidad"}), @ORM\Index(name="FK_oportunidades_areas", columns={"tipo_proyecto"}), @ORM\Index(name="FK_oportunidades_personas", columns={"empresa"})})
 * @ORM\Entity
 */
class Oportunidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="date", nullable=false)
     */
    private $registro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="apertura", type="date", nullable=false)
     */
    private $apertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entrega", type="date", nullable=true)
     */
    private $entrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plazo", type="date", nullable=false)
     */
    private $plazo;

    /**
     * @var string
     *
     * @ORM\Column(name="realizada", type="string", length=1, nullable=true)
     */
    private $realizada;

    /**
     * @var string
     *
     * @ORM\Column(name="causa_no_realizada", type="text", length=65535, nullable=true)
     */
    private $causaNoRealizada;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Modalidades
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Modalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modalidad", referencedColumnName="codigo")
     * })
     */
    private $modalidad;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa", referencedColumnName="Identificacion")
     * })
     */
    private $empresa;

    /**
     * @var \SigepBundle\Entity\TiposProyecto
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_proyecto", referencedColumnName="Codigo")
     * })
     */
    private $tipoProyecto;

    /**
     * @var \SigepBundle\Entity\Ubicaciones
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Ubicaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudad", referencedColumnName="codigo")
     * })
     */
    private $ciudad;


}

