<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresCursos
 *
 * @ORM\Table(name="indicadores_cursos", indexes={@ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresCursos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=120, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer", nullable=false)
     */
    private $duracion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '1';

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


}

