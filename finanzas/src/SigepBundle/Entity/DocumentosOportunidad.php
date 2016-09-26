<?php

namespace SigepBundle\Entity;

/**
 * DocumentosOportunidad
 */
class DocumentosOportunidad
{
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
     * @var \SigepBundle\Entity\Oportunidades
     */
    private $oportunidad;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return DocumentosOportunidad
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
     * @return DocumentosOportunidad
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
     * Set oportunidad
     *
     * @param \SigepBundle\Entity\Oportunidades $oportunidad
     *
     * @return DocumentosOportunidad
     */
    public function setOportunidad(\SigepBundle\Entity\Oportunidades $oportunidad = null)
    {
        $this->oportunidad = $oportunidad;

        return $this;
    }

    /**
     * Get oportunidad
     *
     * @return \SigepBundle\Entity\Oportunidades
     */
    public function getOportunidad()
    {
        return $this->oportunidad;
    }
}
