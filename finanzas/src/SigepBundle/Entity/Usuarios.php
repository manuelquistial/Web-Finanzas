<?php

namespace SigepBundle\Entity;

/**
 * Usuarios
 */
class Usuarios
{
    /**
     * @var string
     */
    private $clave;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $persona;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $perfil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->perfil = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuarios
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return Usuarios
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
     * Add perfil
     *
     * @param \SigepBundle\Entity\Perfiles $perfil
     *
     * @return Usuarios
     */
    public function addPerfil(\SigepBundle\Entity\Perfiles $perfil)
    {
        $this->perfil[] = $perfil;

        return $this;
    }

    /**
     * Remove perfil
     *
     * @param \SigepBundle\Entity\Perfiles $perfil
     */
    public function removePerfil(\SigepBundle\Entity\Perfiles $perfil)
    {
        $this->perfil->removeElement($perfil);
    }

    /**
     * Get perfil
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $centroCosto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tipoSoporte;


    /**
     * Add centroCosto
     *
     * @param \SigepBundle\Entity\CentrosCosto $centroCosto
     *
     * @return Usuarios
     */
    public function addCentroCosto(\SigepBundle\Entity\CentrosCosto $centroCosto)
    {
        $this->centroCosto[] = $centroCosto;

        return $this;
    }

    /**
     * Remove centroCosto
     *
     * @param \SigepBundle\Entity\CentrosCosto $centroCosto
     */
    public function removeCentroCosto(\SigepBundle\Entity\CentrosCosto $centroCosto)
    {
        $this->centroCosto->removeElement($centroCosto);
    }

    /**
     * Get centroCosto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCentroCosto()
    {
        return $this->centroCosto;
    }

    /**
     * Add tipoSoporte
     *
     * @param \SigepBundle\Entity\TiposSoporte $tipoSoporte
     *
     * @return Usuarios
     */
    public function addTipoSoporte(\SigepBundle\Entity\TiposSoporte $tipoSoporte)
    {
        $this->tipoSoporte[] = $tipoSoporte;

        return $this;
    }

    /**
     * Remove tipoSoporte
     *
     * @param \SigepBundle\Entity\TiposSoporte $tipoSoporte
     */
    public function removeTipoSoporte(\SigepBundle\Entity\TiposSoporte $tipoSoporte)
    {
        $this->tipoSoporte->removeElement($tipoSoporte);
    }

    /**
     * Get tipoSoporte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTipoSoporte()
    {
        return $this->tipoSoporte;
    }
}
