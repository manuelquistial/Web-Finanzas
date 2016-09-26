<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentosPropuesta
 *
 * @ORM\Table(name="documentos_propuesta", indexes={@ORM\Index(name="FK_documentos_propuesta_propuestas", columns={"propuesta"})})
 * @ORM\Entity
 */
class DocumentosPropuesta
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
     * @ORM\Column(name="documento", type="blob", nullable=false)
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
     * @var \SigepBundle\Entity\Propuestas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Propuestas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propuesta", referencedColumnName="codigo")
     * })
     */
    private $propuesta;


}

