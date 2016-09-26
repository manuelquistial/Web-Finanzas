<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubros
 *
 * @ORM\Table(name="rubros", indexes={@ORM\Index(name="padre", columns={"padre"}), @ORM\Index(name="proyecto", columns={"proyecto"}), @ORM\Index(name="tipo_egreso", columns={"tipo_egreso"})})
 * @ORM\Entity
 */
class Rubros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigoUdea", type="integer", nullable=true)
     */
    private $codigoudea = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Rubros
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Rubros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;

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
     * @var \SigepBundle\Entity\TiposMovimiento
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_egreso", referencedColumnName="tipo_egreso")
     * })
     */
    private $tipoEgreso;


}

