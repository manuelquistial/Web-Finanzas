<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresAspectos
 *
 * @ORM\Table(name="indicadores_aspectos", indexes={@ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresAspectos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=120, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=false)
     */
    private $habilitado = '1';

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\IndicadoresEncuestaPs", inversedBy="aspecto")
     * @ORM\JoinTable(name="indicadores_calificaciones_encuesta_calidad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="aspecto", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="encuesta", referencedColumnName="codigo")
     *   }
     * )
     */
    private $encuesta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->encuesta = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

