<?php

namespace Usuario\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="security_roles")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRole", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=70, precision=0, scale=0, nullable=false, unique=false)
     */
    private $role;

    /**
     * @var \Usuario\UsuarioBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario\UsuarioBundle\Entity\Usuario", inversedBy="roles", cascade={"persist","merge"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_roles", referencedColumnName="idUser", nullable=true)
     * })
     */
    private $usuarios;


}

