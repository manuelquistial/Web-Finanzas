<?php

namespace SigepBundle\Entity;

/**
 * SecurityRoles
 */
class SecurityRoles
{
    /**
     * @var string
     */
    private $role;

    /**
     * @var integer
     */
    private $usuarioRoles;

    /**
     * @var integer
     */
    private $idrole;


    /**
     * Set role
     *
     * @param string $role
     *
     * @return SecurityRoles
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set usuarioRoles
     *
     * @param integer $usuarioRoles
     *
     * @return SecurityRoles
     */
    public function setUsuarioRoles($usuarioRoles)
    {
        $this->usuarioRoles = $usuarioRoles;

        return $this;
    }

    /**
     * Get usuarioRoles
     *
     * @return integer
     */
    public function getUsuarioRoles()
    {
        return $this->usuarioRoles;
    }

    /**
     * Get idrole
     *
     * @return integer
     */
    public function getIdrole()
    {
        return $this->idrole;
    }
}
