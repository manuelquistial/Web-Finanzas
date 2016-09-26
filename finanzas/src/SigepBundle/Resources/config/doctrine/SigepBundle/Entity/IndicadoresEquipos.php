<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresEquipos
 *
 * @ORM\Table(name="indicadores_equipos", uniqueConstraints={@ORM\UniqueConstraint(name="proyecto", columns={"proyecto", "inventario"})}, indexes={@ORM\Index(name="IDX_66378A696FD202B9", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresEquipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="inventario", type="string", length=10, nullable=false)
     */
    private $inventario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="funcionando", type="boolean", nullable=false)
     */
    private $funcionando = '1';

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

