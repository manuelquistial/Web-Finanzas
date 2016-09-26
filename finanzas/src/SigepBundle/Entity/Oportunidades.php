<?php

namespace SigepBundle\Entity;

/**
 * Oportunidades
 */
class Oportunidades
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $registro;

    /**
     * @var \DateTime
     */
    private $apertura;

    /**
     * @var \DateTime
     */
    private $entrega;

    /**
     * @var \DateTime
     */
    private $plazo;

    /**
     * @var string
     */
    private $realizada;

    /**
     * @var string
     */
    private $causaNoRealizada;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Modalidades
     */
    private $modalidad;

    /**
     * @var \SigepBundle\Entity\Personas
     */
    private $empresa;

    /**
     * @var \SigepBundle\Entity\TiposProyecto
     */
    private $tipoProyecto;

    /**
     * @var \SigepBundle\Entity\Ubicaciones
     */
    private $ciudad;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Oportunidades
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
     * Set registro
     *
     * @param \DateTime $registro
     *
     * @return Oportunidades
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return \DateTime
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set apertura
     *
     * @param \DateTime $apertura
     *
     * @return Oportunidades
     */
    public function setApertura($apertura)
    {
        $this->apertura = $apertura;

        return $this;
    }

    /**
     * Get apertura
     *
     * @return \DateTime
     */
    public function getApertura()
    {
        return $this->apertura;
    }

    /**
     * Set entrega
     *
     * @param \DateTime $entrega
     *
     * @return Oportunidades
     */
    public function setEntrega($entrega)
    {
        $this->entrega = $entrega;

        return $this;
    }

    /**
     * Get entrega
     *
     * @return \DateTime
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * Set plazo
     *
     * @param \DateTime $plazo
     *
     * @return Oportunidades
     */
    public function setPlazo($plazo)
    {
        $this->plazo = $plazo;

        return $this;
    }

    /**
     * Get plazo
     *
     * @return \DateTime
     */
    public function getPlazo()
    {
        return $this->plazo;
    }

    /**
     * Set realizada
     *
     * @param string $realizada
     *
     * @return Oportunidades
     */
    public function setRealizada($realizada)
    {
        $this->realizada = $realizada;

        return $this;
    }

    /**
     * Get realizada
     *
     * @return string
     */
    public function getRealizada()
    {
        return $this->realizada;
    }

    /**
     * Set causaNoRealizada
     *
     * @param string $causaNoRealizada
     *
     * @return Oportunidades
     */
    public function setCausaNoRealizada($causaNoRealizada)
    {
        $this->causaNoRealizada = $causaNoRealizada;

        return $this;
    }

    /**
     * Get causaNoRealizada
     *
     * @return string
     */
    public function getCausaNoRealizada()
    {
        return $this->causaNoRealizada;
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
     * Set modalidad
     *
     * @param \SigepBundle\Entity\Modalidades $modalidad
     *
     * @return Oportunidades
     */
    public function setModalidad(\SigepBundle\Entity\Modalidades $modalidad = null)
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    /**
     * Get modalidad
     *
     * @return \SigepBundle\Entity\Modalidades
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }

    /**
     * Set empresa
     *
     * @param \SigepBundle\Entity\Personas $empresa
     *
     * @return Oportunidades
     */
    public function setEmpresa(\SigepBundle\Entity\Personas $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \SigepBundle\Entity\Personas
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set tipoProyecto
     *
     * @param \SigepBundle\Entity\TiposProyecto $tipoProyecto
     *
     * @return Oportunidades
     */
    public function setTipoProyecto(\SigepBundle\Entity\TiposProyecto $tipoProyecto = null)
    {
        $this->tipoProyecto = $tipoProyecto;

        return $this;
    }

    /**
     * Get tipoProyecto
     *
     * @return \SigepBundle\Entity\TiposProyecto
     */
    public function getTipoProyecto()
    {
        return $this->tipoProyecto;
    }

    /**
     * Set ciudad
     *
     * @param \SigepBundle\Entity\Ubicaciones $ciudad
     *
     * @return Oportunidades
     */
    public function setCiudad(\SigepBundle\Entity\Ubicaciones $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \SigepBundle\Entity\Ubicaciones
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
