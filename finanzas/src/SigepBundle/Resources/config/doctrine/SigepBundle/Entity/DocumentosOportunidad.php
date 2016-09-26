<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentosOportunidad
 *
 * @ORM\Table(name="documentos_oportunidad", indexes={@ORM\Index(name="FK_documentos_oportunidad_oportunidades", columns={"oportunidad"})})
 * @ORM\Entity
 */
class DocumentosOportunidad
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="blob", nullable=true)
     */
    private $documento;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Oportunidades
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Oportunidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oportunidad", referencedColumnName="codigo")
     * })
     */
    private $oportunidad;


}

