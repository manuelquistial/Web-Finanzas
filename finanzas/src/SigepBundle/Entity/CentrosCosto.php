<?php

namespace SigepBundle\Entity;

/**
 * CentrosCosto
 */
class CentrosCosto
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $ordenador;

    /**
     * @var integer
     */
    private $codigo;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CentrosCosto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ordenador
     *
     * @param string $ordenador
     *
     * @return CentrosCosto
     */
    public function setOrdenador($ordenador)
    {
        $this->ordenador = $ordenador;

        return $this;
    }

    /**
     * Get ordenador
     *
     * @return string
     */
    public function getOrdenador()
    {
        return $this->ordenador;
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
     * @return CentrosCosto
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
