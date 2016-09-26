<?php

namespace SigepBundle\Entity;

/**
 * PersonasAlerta
 */
class PersonasAlerta
{
    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\PuntosControl
     */
    private $puntoControl;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return PersonasAlerta
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
     * Set puntoControl
     *
     * @param \SigepBundle\Entity\PuntosControl $puntoControl
     *
     * @return PersonasAlerta
     */
    public function setPuntoControl(\SigepBundle\Entity\PuntosControl $puntoControl)
    {
        $this->puntoControl = $puntoControl;

        return $this;
    }

    /**
     * Get puntoControl
     *
     * @return \SigepBundle\Entity\PuntosControl
     */
    public function getPuntoControl()
    {
        return $this->puntoControl;
    }

    /**
     * Set proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return PersonasAlerta
     */
    public function setProyecto(\SigepBundle\Entity\Proyectos $proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \SigepBundle\Entity\Proyectos
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
