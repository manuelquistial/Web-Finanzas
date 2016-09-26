<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadosProyecto
 *
 * @ORM\Table(name="estados_proyecto")
 * @ORM\Entity
 */
class EstadosProyecto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

