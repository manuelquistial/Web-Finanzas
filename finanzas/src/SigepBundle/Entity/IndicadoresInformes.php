<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresInformes
 */
class IndicadoresInformes
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $informe;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $atrasado = '0';

    /**
     * @var boolean
     */
    private $completo = '1';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return IndicadoresInformes
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
     * Set informe
     *
     * @param string $informe
     *
     * @return IndicadoresInformes
     */
    public function setInforme($informe)
    {
        $this->informe = $informe;

        return $this;
    }

    /**
     * Get informe
     *
     * @return string
     */
    public function getInforme()
    {
        return $this->informe;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return IndicadoresInformes
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set atrasado
     *
     * @param boolean $atrasado
     *
     * @return IndicadoresInformes
     */
    public function setAtrasado($atrasado)
    {
        $this->atrasado = $atrasado;

        return $this;
    }

    /**
     * Get atrasado
     *
     * @return boolean
     */
    public function getAtrasado()
    {
        return $this->atrasado;
    }

    /**
     * Set completo
     *
     * @param boolean $completo
     *
     * @return IndicadoresInformes
     */
    public function setCompleto($completo)
    {
        $this->completo = $completo;

        return $this;
    }

    /**
     * Get completo
     *
     * @return boolean
     */
    public function getCompleto()
    {
        return $this->completo;
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
     * @return IndicadoresInformes
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
}

