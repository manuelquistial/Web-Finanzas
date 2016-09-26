<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresEncuestaPs
 *
 * @ORM\Table(name="indicadores_encuesta_ps", indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="cliente", columns={"cliente"}), @ORM\Index(name="servicio", columns={"servicio"})})
 * @ORM\Entity
 */
class IndicadoresEncuestaPs
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

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
     *   @ORM\JoinColumn(name="cliente", referencedColumnName="Identificacion")
     * })
     */
    private $cliente;

    /**
     * @var \SigepBundle\Entity\IndicadoresServicios
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\IndicadoresServicios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio", referencedColumnName="codigo")
     * })
     */
    private $servicio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\IndicadoresAspectos", mappedBy="encuesta")
     */
    private $aspecto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aspecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

