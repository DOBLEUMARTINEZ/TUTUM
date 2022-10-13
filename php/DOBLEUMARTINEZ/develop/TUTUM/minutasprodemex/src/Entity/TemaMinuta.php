<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemaMinuta
 *
 * @ORM\Table(name="tema_minuta", indexes={@ORM\Index(name="IDX_9D40DE1B6BF700BD", columns={"id_estatus"}), @ORM\Index(name="IDX_9D40DE1B12469DE2", columns={"id_categoria"}), @ORM\Index(name="id_reunion_2", columns={"id_reunion"}), @ORM\Index(name="id_reunion_3", columns={"id_reunion"}), @ORM\Index(name="IDX_9D40DE1B67433D9C", columns={"id_reunion"}), @ORM\Index(name="id_reunion", columns={"id_reunion"})})
 * @ORM\Entity
 */
class TemaMinuta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="compromiso_inicio", type="date", nullable=true)
     */
    private $compromisoInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="compromiso_fin", type="date", nullable=true)
     */
    private $compromisoFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requerimiento", type="text", length=0, nullable=true)
     */
    private $requerimiento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linea_guia", type="text", length=0, nullable=true)
     */
    private $lineaGuia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compromiso_accion", type="text", length=0, nullable=true)
     */
    private $compromisoAccion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compromiso", type="text", length=0, nullable=true)
     */
    private $compromiso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="text", length=0, nullable=true)
     */
    private $observacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="ultimo_tema_ingresado", type="boolean", nullable=false)
     */
    private $ultimoTemaIngresado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ultimo_modificacion", type="datetime", nullable=true)
     */
    private $ultimoModificacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var bool
     *
     * @ORM\Column(name="ultimo_root", type="boolean", nullable=false)
     */
    private $ultimoRoot = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bloque", type="integer", nullable=false)
     */
    private $bloque = '0';

    /**
     * @var \Minuta
     *
     * @ORM\ManyToOne(targetEntity="Minuta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reunion", referencedColumnName="id")
     * })
     */
    private $idReunion;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * })
     */
    private $idCategoria;

    /**
     * @var \EstatusMinuta
     *
     * @ORM\ManyToOne(targetEntity="EstatusMinuta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estatus", referencedColumnName="id")
     * })
     */
    private $idEstatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getCompromisoInicio(): ?\DateTimeInterface
    {
        return $this->compromisoInicio;
    }

    public function setCompromisoInicio(?\DateTimeInterface $compromisoInicio): self
    {
        $this->compromisoInicio = $compromisoInicio;

        return $this;
    }

    public function getCompromisoFin(): ?\DateTimeInterface
    {
        return $this->compromisoFin;
    }

    public function setCompromisoFin(?\DateTimeInterface $compromisoFin): self
    {
        $this->compromisoFin = $compromisoFin;

        return $this;
    }

    public function getRequerimiento(): ?string
    {
        return $this->requerimiento;
    }

    public function setRequerimiento(?string $requerimiento): self
    {
        $this->requerimiento = $requerimiento;

        return $this;
    }

    public function getLineaGuia(): ?string
    {
        return $this->lineaGuia;
    }

    public function setLineaGuia(?string $lineaGuia): self
    {
        $this->lineaGuia = $lineaGuia;

        return $this;
    }

    public function getCompromisoAccion(): ?string
    {
        return $this->compromisoAccion;
    }

    public function setCompromisoAccion(?string $compromisoAccion): self
    {
        $this->compromisoAccion = $compromisoAccion;

        return $this;
    }

    public function getCompromiso(): ?string
    {
        return $this->compromiso;
    }

    public function setCompromiso(?string $compromiso): self
    {
        $this->compromiso = $compromiso;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(?string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function isUltimoTemaIngresado(): ?bool
    {
        return $this->ultimoTemaIngresado;
    }

    public function setUltimoTemaIngresado(bool $ultimoTemaIngresado): self
    {
        $this->ultimoTemaIngresado = $ultimoTemaIngresado;

        return $this;
    }

    public function getUltimoModificacion(): ?\DateTimeInterface
    {
        return $this->ultimoModificacion;
    }

    public function setUltimoModificacion(?\DateTimeInterface $ultimoModificacion): self
    {
        $this->ultimoModificacion = $ultimoModificacion;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(?int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function isUltimoRoot(): ?bool
    {
        return $this->ultimoRoot;
    }

    public function setUltimoRoot(bool $ultimoRoot): self
    {
        $this->ultimoRoot = $ultimoRoot;

        return $this;
    }

    public function getBloque(): ?int
    {
        return $this->bloque;
    }

    public function setBloque(int $bloque): self
    {
        $this->bloque = $bloque;

        return $this;
    }

    public function getIdReunion(): ?Minuta
    {
        return $this->idReunion;
    }

    public function setIdReunion(?Minuta $idReunion): self
    {
        $this->idReunion = $idReunion;

        return $this;
    }

    public function getIdCategoria(): ?Categoria
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(?Categoria $idCategoria): self
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getIdEstatus(): ?EstatusMinuta
    {
        return $this->idEstatus;
    }

    public function setIdEstatus(?EstatusMinuta $idEstatus): self
    {
        $this->idEstatus = $idEstatus;

        return $this;
    }


}
