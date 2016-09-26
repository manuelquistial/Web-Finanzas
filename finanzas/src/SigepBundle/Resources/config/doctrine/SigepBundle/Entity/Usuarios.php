<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=50, nullable=true)
     */
    private $clave;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     * })
     */
    private $persona;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\CentrosCosto", inversedBy="usuario")
     * @ORM\JoinTable(name="centro_costo_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Usuario", referencedColumnName="persona")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Centro_costo", referencedColumnName="Codigo")
     *   }
     * )
     */
    private $centroCosto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Perfiles", inversedBy="usuario")
     * @ORM\JoinTable(name="perfiles_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuario", referencedColumnName="persona")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="perfil", referencedColumnName="codigo")
     *   }
     * )
     */
    private $perfil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\TiposSoporte", inversedBy="usuario")
     * @ORM\JoinTable(name="tipo_soporte_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Usuario", referencedColumnName="persona")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Tipo_soporte", referencedColumnName="Codigo")
     *   }
     * )
     */
    private $tipoSoporte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->centroCosto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipoSoporte = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

