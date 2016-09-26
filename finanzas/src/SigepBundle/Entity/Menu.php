<?php

namespace SigepBundle\Entity;

/**
 * Menu
 */
class Menu
{
    /**
     * @var string
     */
    private $nombre = '';

    /**
     * @var integer
     */
    private $nivel;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var string
     */
    private $imagen = '';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Destinos
     */
    private $destino;

    /**
     * @var \SigepBundle\Entity\Menu
     */
    private $padre;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Menu
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
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Menu
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return Menu
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Menu
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
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
     * Set destino
     *
     * @param \SigepBundle\Entity\Destinos $destino
     *
     * @return Menu
     */
    public function setDestino(\SigepBundle\Entity\Destinos $destino = null)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return \SigepBundle\Entity\Destinos
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set padre
     *
     * @param \SigepBundle\Entity\Menu $padre
     *
     * @return Menu
     */
    public function setPadre(\SigepBundle\Entity\Menu $padre = null)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return \SigepBundle\Entity\Menu
     */
    public function getPadre()
    {
        return $this->padre;
    }
}
