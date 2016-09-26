<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metas
 *
 * @ORM\Table(name="metas", indexes={@ORM\Index(name="FK_metas_compromisos", columns={"compromiso"})})
 * @ORM\Entity
 */
class Metas
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="indicador", type="string", length=150, nullable=false)
     */
    private $indicador;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Compromisos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Compromisos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compromiso", referencedColumnName="codigo")
     * })
     */
    private $compromiso;


}

