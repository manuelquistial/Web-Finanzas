<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposGrupo
 *
 * @ORM\Table(name="tipos_grupo")
 * @ORM\Entity
 */
class TiposGrupo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=250, nullable=true)
     */
    private $nombre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

