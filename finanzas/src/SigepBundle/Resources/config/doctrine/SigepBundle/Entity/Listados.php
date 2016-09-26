<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listados
 *
 * @ORM\Table(name="listados", indexes={@ORM\Index(name="dependencia", columns={"dependencia"})})
 * @ORM\Entity
 */
class Listados
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Dependencias
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Dependencias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dependencia", referencedColumnName="Codigo")
     * })
     */
    private $dependencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Movimientos", inversedBy="listado")
     * @ORM\JoinTable(name="movimientos_listado",
     *   joinColumns={
     *     @ORM\JoinColumn(name="listado", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="movimiento", referencedColumnName="Codigo")
     *   }
     * )
     */
    private $movimiento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movimiento = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

