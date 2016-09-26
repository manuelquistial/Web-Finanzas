<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destinos
 *
 * @ORM\Table(name="destinos")
 * @ORM\Entity
 */
class Destinos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=250, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Perfiles", mappedBy="destino")
     */
    private $perfil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

