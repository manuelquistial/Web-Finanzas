<?php

namespace SigepBundle\Entity;

/**
 * Metas
 */
class Metas
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $indicador;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Compromisos
     */
    private $compromiso;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Metas
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
     * Set indicador
     *
     * @param string $indicador
     *
     * @return Metas
     */
    public function setIndicador($indicador)
    {
        $this->indicador = $indicador;

        return $this;
    }

    /**
     * Get indicador
     *
     * @return string
     */
    public function getIndicador()
    {
        return $this->indicador;
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
     * Set compromiso
     *
     * @param \SigepBundle\Entity\Compromisos $compromiso
     *
     * @return Metas
     */
    public function setCompromiso(\SigepBundle\Entity\Compromisos $compromiso = null)
    {
        $this->compromiso = $compromiso;

        return $this;
    }

    /**
     * Get compromiso
     *
     * @return \SigepBundle\Entity\Compromisos
     */
    public function getCompromiso()
    {
        return $this->compromiso;
    }
}
