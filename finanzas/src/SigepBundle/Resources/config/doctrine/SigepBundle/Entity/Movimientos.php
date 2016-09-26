<?php

namespace SigepBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movimientos
 *
 * @ORM\Table(name="movimientos", indexes={@ORM\Index(name="Rubro", columns={"Rubro"}), @ORM\Index(name="CentroCosto", columns={"CentroCosto"}), @ORM\Index(name="Proyecto", columns={"Proyecto"}), @ORM\Index(name="Tipo", columns={"Tipo"}), @ORM\Index(name="persona", columns={"persona"}), @ORM\Index(name="Reserva", columns={"Reserva"}), @ORM\Index(name="usuario_registro", columns={"usuario_registro"}), @ORM\Index(name="codigo_operacion", columns={"codigo_operacion"})})
 * @ORM\Entity
 */
class Movimientos
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor", type="bigint", nullable=false)
     */
    private $valor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_operacion", type="integer", nullable=true)
     */
    private $codigoOperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="iva", type="integer", nullable=true)
     */
    private $iva = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="devuelto", type="boolean", nullable=true)
     */
    private $devuelto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_devolucion", type="date", nullable=true)
     */
    private $fechaDevolucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=false)
     */
    private $habilitado = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="date", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var \SigepBundle\Entity\Rubros
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Rubros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Rubro", referencedColumnName="codigo")
     * })
     */
    private $rubro;

    /**
     * @var \SigepBundle\Entity\CentrosCosto
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\CentrosCosto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CentroCosto", referencedColumnName="Codigo")
     * })
     */
    private $centrocosto;

    /**
     * @var \SigepBundle\Entity\Proyectos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Proyecto", referencedColumnName="codigo")
     * })
     */
    private $proyecto;

    /**
     * @var \SigepBundle\Entity\TiposMovimiento
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\TiposMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipo", referencedColumnName="Codigo")
     * })
     */
    private $tipo;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona", referencedColumnName="Identificacion")
     * })
     */
    private $persona;

    /**
     * @var \SigepBundle\Entity\Movimientos
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Movimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Reserva", referencedColumnName="Codigo")
     * })
     */
    private $reserva;

    /**
     * @var \SigepBundle\Entity\Personas
     *
     * @ORM\ManyToOne(targetEntity="SigepBundle\Entity\Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_registro", referencedColumnName="Identificacion")
     * })
     */
    private $usuarioRegistro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SigepBundle\Entity\Listados", mappedBy="movimiento")
     */
    private $listado;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listado = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

