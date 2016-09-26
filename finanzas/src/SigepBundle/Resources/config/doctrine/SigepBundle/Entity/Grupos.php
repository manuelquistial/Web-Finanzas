<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos", indexes={@ORM\Index(name="tipo", columns={"tipo"}), @ORM\Index(name="dependencia", columns={"dependencia"})})
 * @ORM\Entity
 */
class Grupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=250, nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=250, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=250, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=150, nullable=true)
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
     * @var \SigepBundle\Entity\TiposGrupo
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="codigo")
     * })
     */
    private $tipo;

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
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Proyectos", inversedBy="grupo")
     * @ORM\JoinTable(name="grupos_proyecto",
     *   joinColumns={
     *     @ORM\JoinColumn(name="grupo", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     *   }
     * )
     */
    private $proyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Lineas", inversedBy="grupo")
     * @ORM\JoinTable(name="lineas_grupo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="grupo", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="linea", referencedColumnName="codigo")
     *   }
     * )
     */
    private $linea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->linea = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

