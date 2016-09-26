<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposSolicitud
 *
 * @ORM\Table(name="tipos_solicitud")
 * @ORM\Entity
 */
class TiposSolicitud
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

