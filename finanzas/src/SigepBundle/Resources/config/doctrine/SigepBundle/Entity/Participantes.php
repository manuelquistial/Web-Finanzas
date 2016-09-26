<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantes
 *
 * @ORM\Table(name="participantes", uniqueConstraints={@ORM\UniqueConstraint(name="unico", columns={"persona", "proyecto", "rol"})}, indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="rol", columns={"rol"}), @ORM\Index(name="IDX_19E6E1C451E5B69B", columns={"persona"})})
 * @ORM\Entity
 */
class Participantes
{
    /**
     * @var string
     *
     * @ORM\Column(name="dedicacion_horaria", type="string", length=5, nullable=true)
     */
    private $dedicacionHoraria;

    /**
     * @var string
     *
     * @ORM\Column(name="vinculacion", type="string", length=30, nullable=true)
     */
    private $vinculacion;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_inicio", type="string", length=15, nullable=true)
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_fin", type="string", length=15, nullable=true)
     */
    private $fechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     * })
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     * })
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="Codigo")
     * })
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Actividades", inversedBy="participante")
     * @ORM\JoinTable(name="tareas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="participante", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="actividad", referencedColumnName="codigo")
     *   }
     * )
     */
    private $actividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividad = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

