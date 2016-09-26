<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividades
 *
 * @ORM\Table(name="actividades", indexes={@ORM\Index(name="FK__metas", columns={"meta"})})
 * @ORM\Entity
 */
class Actividades
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date", nullable=false)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date", nullable=false)
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=150, nullable=true)
     */
    private $lugar;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Metas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Metas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meta", referencedColumnName="codigo")
     * })
     */
    private $meta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Participantes", mappedBy="actividad")
     */
    private $participante;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participante = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

