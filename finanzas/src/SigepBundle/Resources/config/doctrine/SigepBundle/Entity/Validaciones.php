<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validaciones
 *
 * @ORM\Table(name="validaciones", indexes={@ORM\Index(name="FK_validaciones_personas", columns={"realizado"}), @ORM\Index(name="IDX_894B474151A7B686", columns={"criterio"})})
 * @ORM\Entity
 */
class Validaciones
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cumplimiento", type="string", length=1, nullable=false)
     */
    private $cumplimiento = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="fuente", type="string", length=500, nullable=false)
     */
    private $fuente;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=500, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="recomendaciones", type="string", length=500, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="anio", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anio;

    /**
     * @var \SigepBundle\Entity\Criterios
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Criterios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="criterio", referencedColumnName="codigo")
     * })
     */
    private $criterio;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="realizado", referencedColumnName="Identificacion")
     * })
     */
    private $realizado;


}

