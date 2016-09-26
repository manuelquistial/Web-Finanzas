<?php

namespace SigepBundle\Entity;

/**
 * GruposPersona
 */
class GruposPersona
{
    /**
     * @var \SigepBundle\Entity\Grupos
     */
    private $grupo;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\Roles
     */
    private $rol;


    /**
     * Set grupo
     *
     * @param \SigepBundle\Entity\Grupos $grupo
     *
     * @return GruposPersona
     */
    public function setGrupo(\SigepBundle\Entity\Grupos $grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \SigepBundle\Entity\Grupos
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return GruposPersona
     */
    public function setPersona(\SigepBundle\Entity\Personas $persona)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set rol
     *
     * @param \SigepBundle\Entity\Roles $rol
     *
     * @return GruposPersona
     */
    public function setRol(\SigepBundle\Entity\Roles $rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \SigepBundle\Entity\Roles
     */
    public function getRol()
    {
        return $this->rol;
    }
}

