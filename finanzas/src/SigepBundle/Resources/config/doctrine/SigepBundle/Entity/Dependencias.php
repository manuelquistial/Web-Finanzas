<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependencias
 *
 * @ORM\Table(name="dependencias")
 * @ORM\Entity
 */
class Dependencias
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=250, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

