<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineas
 *
 * @ORM\Table(name="lineas")
 * @ORM\Entity
 */
class Lineas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

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
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Grupos", mappedBy="linea")
     */
    private $grupo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

