<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposMovimiento
 *
 * @ORM\Table(name="tipos_movimiento", indexes={@ORM\Index(name="tipo_egreso", columns={"tipo_egreso"})})
 * @ORM\Entity
 */
class TiposMovimiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipo_egreso", type="boolean", nullable=false)
     */
    private $tipoEgreso = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;


}

