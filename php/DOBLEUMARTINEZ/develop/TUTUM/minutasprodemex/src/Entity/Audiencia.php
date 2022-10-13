<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audiencia
 *
 * @ORM\Table(name="audiencia", indexes={@ORM\Index(name="IDX_FDCD941867433D9C", columns={"id_minuta"}), @ORM\Index(name="estatus", columns={"estatus"}), @ORM\Index(name="IDX_FDCD9418A76ED395", columns={"id_usuario"}), @ORM\Index(name="id_minuta", columns={"id_minuta"})})
 * @ORM\Entity
 */
class Audiencia
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
     * @var int|null
     *
     * @ORM\Column(name="id_minuta", type="integer", nullable=true)
     */
    private $idMinuta;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="asistencia", type="boolean", nullable=true)
     */
    private $asistencia = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="text", length=0, nullable=true)
     */
    private $observacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="posicion", type="integer", nullable=true)
     */
    private $posicion;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \RegistroMinuta
     *
     * @ORM\ManyToOne(targetEntity="RegistroMinuta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estatus", referencedColumnName="id")
     * })
     */
    private $estatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMinuta(): ?int
    {
        return $this->idMinuta;
    }

    public function setIdMinuta(?int $idMinuta): self
    {
        $this->idMinuta = $idMinuta;

        return $this;
    }

    public function isAsistencia(): ?bool
    {
        return $this->asistencia;
    }

    public function setAsistencia(?bool $asistencia): self
    {
        $this->asistencia = $asistencia;

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

    public function getPosicion(): ?int
    {
        return $this->posicion;
    }

    public function setPosicion(?int $posicion): self
    {
        $this->posicion = $posicion;

        return $this;
    }

    public function getIdUsuario(): ?Usuario
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuario $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getEstatus(): ?RegistroMinuta
    {
        return $this->estatus;
    }

    public function setEstatus(?RegistroMinuta $estatus): self
    {
        $this->estatus = $estatus;

        return $this;
    }


}
