<?php

namespace SigepBundle\Entity;

/**
 * Personas
 */
class Personas
{
    /**
     * @var integer
     */
    private $tipo;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono1;

    /**
     * @var string
     */
    private $telefono2;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var string
     */
    private $identificacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $propuesta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $capacitacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->propuesta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->capacitacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Personas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Personas
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
     * Set email
     *
     * @param string $email
     *
     * @return Personas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Personas
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
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Personas
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Personas
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Personas
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get identificacion
     *
     * @return string
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Add propuestum
     *
     * @param \SigepBundle\Entity\Propuestas $propuestum
     *
     * @return Personas
     */
    public function addPropuestum(\SigepBundle\Entity\Propuestas $propuestum)
    {
        $this->propuesta[] = $propuestum;

        return $this;
    }

    /**
     * Remove propuestum
     *
     * @param \SigepBundle\Entity\Propuestas $propuestum
     */
    public function removePropuestum(\SigepBundle\Entity\Propuestas $propuestum)
    {
        $this->propuesta->removeElement($propuestum);
    }

    /**
     * Get propuesta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropuesta()
    {
        return $this->propuesta;
    }

    /**
     * Add empresa
     *
     * @param \SigepBundle\Entity\Personas $empresa
     *
     * @return Personas
     */
    public function addEmpresa(\SigepBundle\Entity\Personas $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \SigepBundle\Entity\Personas $empresa
     */
    public function removeEmpresa(\SigepBundle\Entity\Personas $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Add capacitacion
     *
     * @param \SigepBundle\Entity\IndicadoresCapacitaciones $capacitacion
     *
     * @return Personas
     */
    public function addCapacitacion(\SigepBundle\Entity\IndicadoresCapacitaciones $capacitacion)
    {
        $this->capacitacion[] = $capacitacion;

        return $this;
    }

    /**
     * Remove capacitacion
     *
     * @param \SigepBundle\Entity\IndicadoresCapacitaciones $capacitacion
     */
    public function removeCapacitacion(\SigepBundle\Entity\IndicadoresCapacitaciones $capacitacion)
    {
        $this->capacitacion->removeElement($capacitacion);
    }

    /**
     * Get capacitacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCapacitacion()
    {
        return $this->capacitacion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $proyecto;


    /**
     * Add proyecto
     *
     * @param \SigepBundle\Entity\Proyectos $proyecto
     *
     * @return Personas
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
}
