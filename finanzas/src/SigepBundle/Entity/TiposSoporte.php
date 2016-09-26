<?php

namespace SigepBundle\Entity;

/**
 * TiposSoporte
 */
class TiposSoporte
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $codigo;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TiposSoporte
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
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuario
     *
     * @param \SigepBundle\Entity\Usuarios $usuario
     *
     * @return TiposSoporte
     */
    public function addUsuario(\SigepBundle\Entity\Usuarios $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \SigepBundle\Entity\Usuarios $usuario
     */
    public function removeUsuario(\SigepBundle\Entity\Usuarios $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
