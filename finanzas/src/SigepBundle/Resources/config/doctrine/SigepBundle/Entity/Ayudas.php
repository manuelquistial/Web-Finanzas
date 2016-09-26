<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ayudas
 *
 * @ORM\Table(name="ayudas", uniqueConstraints={@ORM\UniqueConstraint(name="nivel", columns={"nivel", "padre", "orden"})}, indexes={@ORM\Index(name="padre", columns={"padre"})})
 * @ORM\Entity
 */
class Ayudas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="html", type="text", nullable=true)
     */
    private $html;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Ayudas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Ayudas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;


}

