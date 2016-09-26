<?php

namespace SigepBundle\Entity;

/**
 * DocumentosSoporte
 */
class DocumentosSoporte
{
    /**
     * @var string
     */
    private $numeroDocumento;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $codigoOperacion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $documento;

    /**
     * @var integer
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\TiposSoporte
     */
    private $tipoDocumento;


    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return DocumentosSoporte
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return DocumentosSoporte
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
     * Set codigoOperacion
     *
     * @param integer $codigoOperacion
     *
     * @return DocumentosSoporte
     */
    public function setCodigoOperacion($codigoOperacion)
    {
        $this->codigoOperacion = $codigoOperacion;

        return $this;
    }

    /**
     * Get codigoOperacion
     *
     * @return integer
     */
    public function getCodigoOperacion()
    {
        return $this->codigoOperacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return DocumentosSoporte
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
     * Set documento
     *
     * @param string $documento
     *
     * @return DocumentosSoporte
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
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
     * Set tipoDocumento
     *
     * @param \SigepBundle\Entity\TiposSoporte $tipoDocumento
     *
     * @return DocumentosSoporte
     */
    public function setTipoDocumento(\SigepBundle\Entity\TiposSoporte $tipoDocumento = null)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return \SigepBundle\Entity\TiposSoporte
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
}

