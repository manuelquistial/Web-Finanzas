<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresNoConforme
 *
 * @ORM\Table(name="indicadores_no_conforme", indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="persona", columns={"persona"}), @ORM\Index(name="producto", columns={"producto"})})
 * @ORM\Entity
 */
class IndicadoresNoConforme
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
     * @ORM\Column(name="otro", type="string", length=150, nullable=true)
     */
    private $otro;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

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
     * @var \SigepBundle\Entity\IndicadoresProductos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\IndicadoresProductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto", referencedColumnName="codigo")
     * })
     */
    private $producto;


}

