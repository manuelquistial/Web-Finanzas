<?php

namespace SigepBundle\Entity;

/**
 * Ayudas
 */
class Ayudas
{
    /**
     * @var integer
     */
    private $nivel;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var boolean
     */
    private $tipo;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $html;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Ayudas
     */
    private $padre;


    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Ayudas
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
     * @return Ayudas
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
     * Set tipo
     *
     * @param boolean $tipo
     *
     * @return Ayudas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Ayudas
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set html
     *
     * @param string $html
     *
     * @return Ayudas
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
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
     * Set padre
     *
     * @param \SigepBundle\Entity\Ayudas $padre
     *
     * @return Ayudas
     */
    public function setPadre(\SigepBundle\Entity\Ayudas $padre = null)
    {
        $this->padre = $padre;

        return $this;
    }

    /**
     * Get padre
     *
     * @return \SigepBundle\Entity\Ayudas
     */
    public function getPadre()
    {
        return $this->padre;
    }
}
