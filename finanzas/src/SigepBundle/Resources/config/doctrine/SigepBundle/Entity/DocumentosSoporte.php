<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentosSoporte
 *
 * @ORM\Table(name="documentos_soporte", indexes={@ORM\Index(name="tipo_documento", columns={"tipo_documento"}), @ORM\Index(name="codigo_operacion", columns={"codigo_operacion"})})
 * @ORM\Entity
 */
class DocumentosSoporte
{
    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=20, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_operacion", type="integer", nullable=true)
     */
    private $codigoOperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="blob", length=16777215, nullable=true)
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
     * @var \SigepBundle\Entity\TiposSoporte
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposSoporte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_documento", referencedColumnName="Codigo")
     * })
     */
    private $tipoDocumento;


}

