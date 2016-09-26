<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentrosCosto
 *
 * @ORM\Table(name="centros_costo")
 * @ORM\Entity
 */
class CentrosCosto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=250, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Ordenador", type="string", length=15, nullable=true)
     */
    private $ordenador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Usuarios", mappedBy="centroCosto")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

