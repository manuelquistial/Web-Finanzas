<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposContribuyente
 *
 * @ORM\Table(name="tipos_contribuyente")
 * @ORM\Entity
 */
class TiposContribuyente
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

