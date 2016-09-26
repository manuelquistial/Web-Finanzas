<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametros
 *
 * @ORM\Table(name="parametros")
 * @ORM\Entity
 */
class Parametros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="valor_numerico", type="integer", nullable=false)
     */
    private $valorNumerico;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_string", type="string", length=50, nullable=true)
     */
    private $valorString;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $parametro;


}

