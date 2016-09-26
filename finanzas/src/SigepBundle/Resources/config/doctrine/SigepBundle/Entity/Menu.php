<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="padre", columns={"padre"}), @ORM\Index(name="destino", columns={"destino"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=100, nullable=true)
     */
    private $imagen = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Destinos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Destinos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="destino", referencedColumnName="codigo")
     * })
     */
    private $destino;

    /**
     * @var \SigepBundle\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;


}

