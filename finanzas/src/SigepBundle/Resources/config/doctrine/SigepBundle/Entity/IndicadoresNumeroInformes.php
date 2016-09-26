<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndicadoresNumeroInformes
 *
 * @ORM\Table(name="indicadores_numero_informes", indexes={@ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class IndicadoresNumeroInformes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var \SigepBundle\Entity\Proyectos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto", referencedColumnName="codigo")
     * })
     */
    private $proyecto;


}

