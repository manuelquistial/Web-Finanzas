<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecurityRoles
 *
 * @ORM\Table(name="security_roles", indexes={@ORM\Index(name="IDX_5A82CD6DABE044D9", columns={"usuario_roles"})})
 * @ORM\Entity
 */
class SecurityRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=70, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_roles", type="integer", nullable=true)
     */
    private $usuarioRoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRole", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrole;


}

