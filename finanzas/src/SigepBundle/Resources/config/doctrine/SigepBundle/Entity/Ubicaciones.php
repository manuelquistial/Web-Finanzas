<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicaciones
 *
 * @ORM\Table(name="ubicaciones", indexes={@ORM\Index(name="FK_ubicaciones_ubicaciones", columns={"padre"})})
 * @ORM\Entity
 */
class Ubicaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
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
     * @var \SigepBundle\Entity\Ubicaciones
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Ubicaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;


}

