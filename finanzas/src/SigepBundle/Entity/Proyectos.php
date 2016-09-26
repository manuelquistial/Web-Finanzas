<?php

namespace SigepBundle\Entity;

/**
 * Proyectos
 */
class Proyectos
{
    /**
     * @var string
     */
    private $codificacion = '';

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $descriptores;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Propuestas
     */
    private $propuesta;

    /**
     * @var \SigepBundle\Entity\TiposProyecto
     */
    private $tipo;

    /**
     * @var \SigepBundle\Entity\EstadosProyecto
     */
    private $estado;

    /**
     * @var \SigepBundle\Entity\TiposContribuyente
     */
    private $tipocontribuyente;

    /**
     * @var \SigepBundle\Entity\Dependencias
     */
    private $dependencia;

    /**
     * @var \SigepBundle\Entity\Nodos
     */
    private $nodo;


    /**
     * Set codificacion
     *
     * @param string $codificacion
     *
     * @return Proyectos
     */
    public function setCodificacion($codificacion)
    {
        $this->codificacion = $codificacion;

        return $this;
    }

    /**
     * Get codificacion
     *
     * @return string
     */
    public function getCodificacion()
    {
        return $this->codificacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyectos
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyectos
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
     * Set descriptores
     *
     * @param string $descriptores
     *
     * @return Proyectos
     */
    public function setDescriptores($descriptores)
    {
        $this->descriptores = $descriptores;

        return $this;
    }

    /**
     * Get descriptores
     *
     * @return string
     */
    public function getDescriptores()
    {
        return $this->descriptores;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Proyectos
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
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Proyectos
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
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
     * Set propuesta
     *
     * @param \SigepBundle\Entity\Propuestas $propuesta
     *
     * @return Proyectos
     */
    public function setPropuesta(\SigepBundle\Entity\Propuestas $propuesta = null)
    {
        $this->propuesta = $propuesta;

        return $this;
    }

    /**
     * Get propuesta
     *
     * @return \SigepBundle\Entity\Propuestas
     */
    public function getPropuesta()
    {
        return $this->propuesta;
    }

    /**
     * Set tipo
     *
     * @param \SigepBundle\Entity\TiposProyecto $tipo
     *
     * @return Proyectos
     */
    public function setTipo(\SigepBundle\Entity\TiposProyecto $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \SigepBundle\Entity\TiposProyecto
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param \SigepBundle\Entity\EstadosProyecto $estado
     *
     * @return Proyectos
     */
    public function setEstado(\SigepBundle\Entity\EstadosProyecto $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \SigepBundle\Entity\EstadosProyecto
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipocontribuyente
     *
     * @param \SigepBundle\Entity\TiposContribuyente $tipocontribuyente
     *
     * @return Proyectos
     */
    public function setTipocontribuyente(\SigepBundle\Entity\TiposContribuyente $tipocontribuyente = null)
    {
        $this->tipocontribuyente = $tipocontribuyente;

        return $this;
    }

    /**
     * Get tipocontribuyente
     *
     * @return \SigepBundle\Entity\TiposContribuyente
     */
    public function getTipocontribuyente()
    {
        return $this->tipocontribuyente;
    }

    /**
     * Set dependencia
     *
     * @param \SigepBundle\Entity\Dependencias $dependencia
     *
     * @return Proyectos
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
     * Set nodo
     *
     * @param \SigepBundle\Entity\Nodos $nodo
     *
     * @return Proyectos
     */
    public function setNodo(\SigepBundle\Entity\Nodos $nodo = null)
    {
        $this->nodo = $nodo;

        return $this;
    }

    /**
     * Get nodo
     *
     * @return \SigepBundle\Entity\Nodos
     */
    public function getNodo()
    {
        return $this->nodo;
    }
    /**
     * @var string
     */
    private $convocatoria = 'Desconocido';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $persona;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $grupo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set convocatoria
     *
     * @param string $convocatoria
     *
     * @return Proyectos
     */
    public function setConvocatoria($convocatoria)
    {
        $this->convocatoria = $convocatoria;

        return $this;
    }

    /**
     * Get convocatoria
     *
     * @return string
     */
    public function getConvocatoria()
    {
        return $this->convocatoria;
    }

    /**
     * Add persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     *
     * @return Proyectos
     */
    public function addPersona(\SigepBundle\Entity\Personas $persona)
    {
        $this->persona[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \SigepBundle\Entity\Personas $persona
     */
    public function removePersona(\SigepBundle\Entity\Personas $persona)
    {
        $this->persona->removeElement($persona);
    }

    /**
     * Get persona
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add grupo
     *
     * @param \SigepBundle\Entity\Grupos $grupo
     *
     * @return Proyectos
     */
    public function addGrupo(\SigepBundle\Entity\Grupos $grupo)
    {
        $this->grupo[] = $grupo;

        return $this;
    }

    /**
     * Remove grupo
     *
     * @param \SigepBundle\Entity\Grupos $grupo
     */
    public function removeGrupo(\SigepBundle\Entity\Grupos $grupo)
    {
        $this->grupo->removeElement($grupo);
    }

    /**
     * Get grupo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
