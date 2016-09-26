<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasAlerta
 *
 * @ORM\Table(name="personas_alerta", indexes={@ORM\Index(name="persona", columns={"persona"}), @ORM\Index(name="punto_control", columns={"punto_control"}), @ORM\Index(name="proyecto", columns={"proyecto"})})
 * @ORM\Entity
 */
class PersonasAlerta
{
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
     * @var \SigepBundle\Entity\PuntosControl
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\PuntosControl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="punto_control", referencedColumnName="codigo")
     * })
     */
    private $puntoControl;

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

