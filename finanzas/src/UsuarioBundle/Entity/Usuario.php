<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UsuarioBundle\Entity\Usuario.
 *
 * @ORM\Table( name="security_users" )
 * @ORM\Entity(repositoryClass="\UsuarioBundle\Repository\UsuarioRepository")
 * @DoctrineAssert\UniqueEntity("usuario")
 */
class Usuario implements UserInterface, \Serializable
{
	public function eraseCredentials()
    {
    }

	/**
     * @inheritDoc
     */
    public function equals(UserInterface $user)
    {
        return $this->id === $user->getId();
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

	public function getUsername()
	{
		return $this->getUsuario();
	}

	public function __construct()
	{
		$this->fechaUltima = new \DateTime();
		$this->roles = new ArrayCollection();
	}
	
	public function __toString()
    {
        return $this->getNombre().' '.$this->getApellidos();
    }

	public function getRoles(){
		return $this->roles->toArray();
	}
	
	/**
	 * @var ArrayCollection $roles
     * @ORM\OneToMany(targetEntity="Role", mappedBy="usuarios", cascade={"persist", "remove", "merge"})
     */
    protected $roles;
 
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaUltima", type="datetime")
     */
    private $fechaUltima;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set fechaUltima
     *
     * @param \DateTime $fechaUltima
     *
     * @return Usuario
     */
    public function setFechaUltima($fechaUltima)
    {
        $this->fechaUltima = $fechaUltima;

        return $this;
    }

    /**
     * Get fechaUltima
     *
     * @return \DateTime
     */
    public function getFechaUltima()
    {
        return $this->fechaUltima;
    }

    /**
     * Add role
     *
     * @param \UsuarioBundle\Entity\Role $role
     *
     * @return Usuario
     */
    public function addRole(\UsuarioBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \UsuarioBundle\Entity\Role $role
     */
    public function removeRole(\UsuarioBundle\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }
}
