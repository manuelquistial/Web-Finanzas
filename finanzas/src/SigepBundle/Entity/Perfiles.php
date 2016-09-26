<?php

namespace SigepBundle\Entity;

/**
 * Perfiles
 */
class Perfiles
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $acceso;

    /**
     * @var string
     */
    private $where;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Dependencias
     */
    private $dependencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $destino;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->destino = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Perfiles
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
     * Set acceso
     *
     * @param integer $acceso
     *
     * @return Perfiles
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return integer
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set where
     *
     * @param string $where
     *
     * @return Perfiles
     */
    public function setWhere($where)
    {
        $this->where = $where;

        return $this;
    }

    /**
     * Get where
     *
     * @return string
     */
    public function getWhere()
    {
        return $this->where;
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
     * Set dependencia
     *
     * @param \SigepBundle\Entity\Dependencias $dependencia
     *
     * @return Perfiles
     */
    public function setDependencia(\SigepBundle\Entity\Dependencias $dependencia = null)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return \SigepBundle\Entity\Dependencias
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * Add destino
     *
     * @param \SigepBundle\Entity\Destinos $destino
     *
     * @return Perfiles
     */
    public function addDestino(\SigepBundle\Entity\Destinos $destino)
    {
        $this->destino[] = $destino;

        return $this;
    }

    /**
     * Remove destino
     *
     * @param \SigepBundle\Entity\Destinos $destino
     */
    public function removeDestino(\SigepBundle\Entity\Destinos $destino)
    {
        $this->destino->removeElement($destino);
    }

    /**
     * Get destino
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Add usuario
     *
     * @param \SigepBundle\Entity\Usuarios $usuario
     *
     * @return Perfiles
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
