<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresCapacitaciones
 *
 * @ORM\Table(name="indicadores_capacitaciones", indexes={@ORM\Index(name="curso", columns={"curso"}), @ORM\Index(name="facilitador", columns={"facilitador"})})
 * @ORM\Entity
 */
class IndicadoresCapacitaciones
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var integer
     *
     * @ORM\Column(name="intensidad", type="integer", nullable=false)
     */
    private $intensidad;

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
     * @var \SigepBundle\Entity\IndicadoresCursos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\IndicadoresCursos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso", referencedColumnName="codigo")
     * })
     */
    private $curso;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facilitador", referencedColumnName="Identificacion")
     * })
     */
    private $facilitador;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Personas", inversedBy="capacitacion")
     * @ORM\JoinTable(name="indicadores_participantes_capacitacion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="capacitacion", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="participante", referencedColumnName="Identificacion")
     *   }
     * )
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

