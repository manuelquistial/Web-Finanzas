<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresMantenimientos
 *
 * @ORM\Table(name="indicadores_mantenimientos", indexes={@ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="equipo", columns={"equipo"}), @ORM\Index(name="tipo", columns={"tipo"})})
 * @ORM\Entity
 */
class IndicadoresMantenimientos
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="realizado", type="boolean", nullable=false)
     */
    private $realizado = '0';

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
     * @var \SigepBundle\Entity\IndicadoresEquipos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\IndicadoresEquipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="codigo")
     * })
     */
    private $equipo;

    /**
     * @var \SigepBundle\Entity\IndicadoresTiposMantenimiento
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\IndicadoresTiposMantenimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="codigo")
     * })
     */
    private $tipo;


}

