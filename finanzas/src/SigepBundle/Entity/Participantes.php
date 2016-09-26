<?php

namespace SigepBundle\Entity;

/**
 * Participantes
 */
class Participantes
{
    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\Roles
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividad = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return Participantes
     */
    public function setProyecto(\SigepBundle\Entity\Proyectos $proyecto = null)
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

    /**
     * Set persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return Participantes
     */
    public function setPersona(\SigepBundle\Entity\Personas $persona = null)
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
     * @return Participantes
     */
    public function setRol(\SigepBundle\Entity\Roles $rol = null)
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

    /**
     * Add actividad
     *
     * @param \SigepBundle\Entity\Actividades $actividad
     *
     * @return Participantes
     */
    public function addActividad(\SigepBundle\Entity\Actividades $actividad)
    {
        $this->actividad[] = $actividad;

        return $this;
    }

    /**
     * Remove actividad
     *
     * @param \SigepBundle\Entity\Actividades $actividad
     */
    public function removeActividad(\SigepBundle\Entity\Actividades $actividad)
    {
        $this->actividad->removeElement($actividad);
    }

    /**
     * Get actividad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActividad()
    {
        return $this->actividad;
    }
    /**
     * @var string
     */
    private $dedicacionHoraria;

    /**
     * @var string
     */
    private $vinculacion;

    /**
     * @var string
     */
    private $fechaInicio;

    /**
     * @var string
     */
    private $fechaFin;


    /**
     * Set dedicacionHoraria
     *
     * @param string $dedicacionHoraria
     *
     * @return Participantes
     */
    public function setDedicacionHoraria($dedicacionHoraria)
    {
        $this->dedicacionHoraria = $dedicacionHoraria;

        return $this;
    }

    /**
     * Get dedicacionHoraria
     *
     * @return string
     */
    public function getDedicacionHoraria()
    {
        return $this->dedicacionHoraria;
    }

    /**
     * Set vinculacion
     *
     * @param string $vinculacion
     *
     * @return Participantes
     */
    public function setVinculacion($vinculacion)
    {
        $this->vinculacion = $vinculacion;

        return $this;
    }

    /**
     * Get vinculacion
     *
     * @return string
     */
    public function getVinculacion()
    {
        return $this->vinculacion;
    }

    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     *
     * @return Participantes
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param string $fechaFin
     *
     * @return Participantes
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return string
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }
}
