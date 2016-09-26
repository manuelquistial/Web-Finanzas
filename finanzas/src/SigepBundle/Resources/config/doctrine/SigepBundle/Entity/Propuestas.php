<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propuestas
 *
 * @ORM\Table(name="propuestas", indexes={@ORM\Index(name="FK__oportunidades", columns={"oportunidad"})})
 * @ORM\Entity
 */
class Propuestas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="aprobada", type="string", length=1, nullable=true)
     */
    private $aprobada;

    /**
     * @var string
     *
     * @ORM\Column(name="causa_no_aprobacion", type="text", length=65535, nullable=true)
     */
    private $causaNoAprobacion;

    /**
     * @var string
     *
     * @ORM\Column(name="presentada", type="string", length=1, nullable=true)
     */
    private $presentada;

    /**
     * @var string
     *
     * @ORM\Column(name="causa_no_presentacion", type="text", length=65535, nullable=true)
     */
    private $causaNoPresentacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="integer", nullable=false)
     */
    private $valor = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="date", nullable=false)
     */
    private $registro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entregaCentro", type="date", nullable=true)
     */
    private $entregacentro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entregaEntidad", type="date", nullable=true)
     */
    private $entregaentidad;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Oportunidades
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Oportunidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oportunidad", referencedColumnName="codigo")
     * })
     */
    private $oportunidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Personas", mappedBy="propuesta")
     */
    private $persona;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

