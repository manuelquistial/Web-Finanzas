<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Verificaciones
 *
 * @ORM\Table(name="verificaciones", indexes={@ORM\Index(name="FK_verificaciones_personas", columns={"realizacion"}), @ORM\Index(name="IDX_86762ABDD7F21435", columns={"meta"})})
 * @ORM\Entity
 */
class Verificaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="smallint", nullable=false)
     */
    private $anio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="cumplimiento", type="float", precision=5, scale=2, nullable=false)
     */
    private $cumplimiento = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=250, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="limitaciones", type="string", length=250, nullable=false)
     */
    private $limitaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusiones", type="string", length=250, nullable=false)
     */
    private $conclusiones;

    /**
     * @var string
     *
     * @ORM\Column(name="recomendaciones", type="string", length=250, nullable=false)
     */
    private $recomendaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mes", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var \SigepBundle\Entity\Metas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Metas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meta", referencedColumnName="codigo")
     * })
     */
    private $meta;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="realizacion", referencedColumnName="Identificacion")
     * })
     */
    private $realizacion;


}

