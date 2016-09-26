<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GruposPersona
 *
 * @ORM\Table(name="grupos_persona", indexes={@ORM\Index(name="persona", columns={"persona"}), @ORM\Index(name="rol", columns={"rol"}), @ORM\Index(name="IDX_98519948C0E9BD3", columns={"grupo"})})
 * @ORM\Entity
 */
class GruposPersona
{
    /**
     * @var \SigepBundle\Entity\Grupos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo", referencedColumnName="codigo")
     * })
     */
    private $grupo;

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
     * @var \SigepBundle\Entity\Roles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SigepBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="Codigo")
     * })
     */
    private $rol;


}

