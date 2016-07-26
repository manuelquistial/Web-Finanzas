<?php

namespace Usuario\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Role Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="security_roles")
 * 
 */
class Role implements RoleInterface
{

	/**
	 * @var Usuario $usuarios
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="roles", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="usuario_roles", referencedColumnName="idUser")
     * })
     */
    protected $usuarios;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="idRole")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", name="role", length=70)
     */
    private $role;

    /**
     * Return the role field.
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Return the role field.
     * @return string 
     */
    public function __toString()
    {
        return (string) $this->role;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
   

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Set usuarios
     *
     * @param \Usuario\UsuarioBundle\Entity\Usuario $usuarios
     *
     * @return Role
     */
    public function setUsuarios(\Usuario\UsuarioBundle\Entity\Usuario $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \Usuario\UsuarioBundle\Entity\Usuario
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
