<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personas
 *
 * @ORM\Table(name="personas")
 * @ORM\Entity
 */
class Personas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=250, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=250, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono1", type="string", length=15, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono2", type="string", length=15, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identificacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Propuestas", inversedBy="persona")
     * @ORM\JoinTable(name="autores_propuesta",
     *   joinColumns={
     *     @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="propuesta", referencedColumnName="codigo")
     *   }
     * )
     */
    private $propuesta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Personas", mappedBy="persona")
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Proyectos", mappedBy="persona")
     */
    private $proyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\IndicadoresCapacitaciones", mappedBy="participante")
     */
    private $capacitacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->propuesta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->capacitacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

