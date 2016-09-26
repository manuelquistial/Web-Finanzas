<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfiles
 *
 * @ORM\Table(name="perfiles", indexes={@ORM\Index(name="dependencia", columns={"dependencia"})})
 * @ORM\Entity
 */
class Perfiles
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="acceso", type="integer", nullable=true)
     */
    private $acceso;

    /**
     * @var string
     *
     * @ORM\Column(name="where", type="string", length=250, nullable=true)
     */
    private $where;

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
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Destinos", inversedBy="perfil")
     * @ORM\JoinTable(name="alcances_perfil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="perfil", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="destino", referencedColumnName="codigo")
     *   }
     * )
     */
    private $destino;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Usuarios", mappedBy="perfil")
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->destino = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

