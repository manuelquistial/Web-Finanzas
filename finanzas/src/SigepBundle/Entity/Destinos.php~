<?php

namespace SigepBundle\Entity;

/**
 * Destinos
 */
class Destinos
{
    /**
     * @var string
     */
    private $nombre = '';

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $codigo;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Destinos
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
     * Set url
     *
     * @param string $url
     *
     * @return Destinos
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
     * Add perfil
     *
     * @param \SigepBundle\Entity\Perfiles $perfil
     *
     * @return Destinos
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
}
