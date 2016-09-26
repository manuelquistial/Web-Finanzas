<?php

namespace SigepBundle\Entity;

/**
 * Grupos
 */
class Grupos
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\TiposGrupo
     */
    private $tipo;

    /**
     * @var \SigepBundle\Entity\Dependencias
     */
    private $dependencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $proyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $linea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->linea = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Grupos
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
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Grupos
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Grupos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Grupos
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Grupos
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Grupos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Grupos
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Grupos
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
     * Set tipo
     *
     * @param \SigepBundle\Entity\TiposGrupo $tipo
     *
     * @return Grupos
     */
    public function setTipo(\SigepBundle\Entity\TiposGrupo $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \SigepBundle\Entity\TiposGrupo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set dependencia
     *
     * @param \SigepBundle\Entity\Dependencias $dependencia
     *
     * @return Grupos
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
     * Add proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return Grupos
     */
    public function addProyecto(\SigepBundle\Entity\Proyectos $proyecto)
    {
        $this->proyecto[] = $proyecto;

        return $this;
    }

    /**
     * Remove proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     */
    public function removeProyecto(\SigepBundle\Entity\Proyectos $proyecto)
    {
        $this->proyecto->removeElement($proyecto);
    }

    /**
     * Get proyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Add linea
     *
     * @param \SigepBundle\Entity\Lineas $linea
     *
     * @return Grupos
     */
    public function addLinea(\SigepBundle\Entity\Lineas $linea)
    {
        $this->linea[] = $linea;

        return $this;
    }

    /**
     * Remove linea
     *
     * @param \SigepBundle\Entity\Lineas $linea
     */
    public function removeLinea(\SigepBundle\Entity\Lineas $linea)
    {
        $this->linea->removeElement($linea);
    }

    /**
     * Get linea
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinea()
    {
        return $this->linea;
    }
}

