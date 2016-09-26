<?php

namespace Usuario\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="security_users")
 * @ORM\Entity(repositoryClass="Usuario\UsuarioBundle\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $salt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaUltima", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $fechaUltima;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Usuario\UsuarioBundle\Entity\Role", mappedBy="usuarios", cascade={"persist","remove","merge"})
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

