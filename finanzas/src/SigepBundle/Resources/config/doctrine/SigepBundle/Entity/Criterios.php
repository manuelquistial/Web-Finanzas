<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Criterios
 *
 * @ORM\Table(name="criterios", indexes={@ORM\Index(name="FK__proyectos", columns={"proyecto"}), @ORM\Index(name="FK_criterios_criterios", columns={"padre"})})
 * @ORM\Entity
 */
class Criterios
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=1, nullable=false)
     */
    private $habilitado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     * })
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Criterios
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Criterios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="padre", referencedColumnName="codigo")
     * })
     */
    private $padre;


}

