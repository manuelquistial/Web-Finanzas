<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nodos
 *
 * @ORM\Table(name="nodos", indexes={@ORM\Index(name="padre", columns={"padre"})})
 * @ORM\Entity
 */
class Nodos
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
     * @var \SigepBundle\Entity\Nodos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Nodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;


}

