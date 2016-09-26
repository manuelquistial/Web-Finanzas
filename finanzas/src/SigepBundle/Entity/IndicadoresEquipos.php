<?php

namespace SigepBundle\Entity;

/**
 * IndicadoresEquipos
 */
class IndicadoresEquipos
{
    /**
     * @var string
     */
    private $inventario;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var boolean
     */
    private $funcionando = '1';

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Proyectos
     */
    private $proyecto;


    /**
     * Set inventario
     *
     * @param string $inventario
     *
     * @return IndicadoresEquipos
     */
    public function setInventario($inventario)
    {
        $this->inventario = $inventario;

        return $this;
    }

    /**
     * Get inventario
     *
     * @return string
     */
    public function getInventario()
    {
        return $this->inventario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return IndicadoresEquipos
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
     * Set funcionando
     *
     * @param boolean $funcionando
     *
     * @return IndicadoresEquipos
     */
    public function setFuncionando($funcionando)
    {
        $this->funcionando = $funcionando;

        return $this;
    }

    /**
     * Get funcionando
     *
     * @return boolean
     */
    public function getFuncionando()
    {
        return $this->funcionando;
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
     * @return IndicadoresEquipos
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

