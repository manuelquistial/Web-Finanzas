<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyectos
 *
 * @ORM\Table(name="proyectos", uniqueConstraints={@ORM\UniqueConstraint(name="codificacion", columns={"codificacion", "dependencia"})}, indexes={@ORM\Index(name="Tipo", columns={"Tipo"}), @ORM\Index(name="Estado", columns={"Estado"}), @ORM\Index(name="TipoContribuyente", columns={"TipoContribuyente"}), @ORM\Index(name="dependencia", columns={"dependencia"}), @ORM\Index(name="FK_proyectos_propuestas", columns={"propuesta"})})
 * @ORM\Entity
 */
class Proyectos
{
    /**
     * @var string
     *
     * @ORM\Column(name="codificacion", type="string", length=20, nullable=true)
     */
    private $codificacion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptores", type="string", length=250, nullable=true)
     */
    private $descriptores;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=250, nullable=true)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="convocatoria", type="string", length=250, nullable=false)
     */
    private $convocatoria = 'Desconocido';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Propuestas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Propuestas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propuesta", referencedColumnName="codigo")
     * })
     */
    private $propuesta;

    /**
     * @var \SigepBundle\Entity\TiposProyecto
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipo", referencedColumnName="Codigo")
     * })
     */
    private $tipo;

    /**
     * @var \SigepBundle\Entity\EstadosProyecto
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\EstadosProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Estado", referencedColumnName="Codigo")
     * })
     */
    private $estado;

    /**
     * @var \SigepBundle\Entity\TiposContribuyente
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposContribuyente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TipoContribuyente", referencedColumnName="Codigo")
     * })
     */
    private $tipocontribuyente;

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
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Personas", inversedBy="proyecto")
     * @ORM\JoinTable(name="financiadores",
     *   joinColumns={
     *     @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     *   }
     * )
     */
    private $persona;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Grupos", mappedBy="proyecto")
     */
    private $grupo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

