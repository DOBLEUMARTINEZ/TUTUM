<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Minuta
 *
 * @ORM\Table(name="minuta", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_2", columns={"id"})})
 * @ORM\Entity
 */
class Minuta
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
     * @ORM\Column(name="objetivo", type="string", length=255, nullable=false)
     */
    private $objetivo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_fin", type="time", nullable=true)
     */
    private $fechaFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="proxima_reunion", type="date", nullable=true)
     */
    private $proximaReunion;

    /**
     * @var string
     *
     * @ORM\Column(name="itinerario", type="text", length=0, nullable=false)
     */
    private $itinerario;

    /**
     * @var bool
     *
     * @ORM\Column(name="autorizacion", type="boolean", nullable=false)
     */
    private $autorizacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="estatus", type="integer", nullable=false, options={"default"="1"})
     */
    private $estatus = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjetivo(): ?string
    {
        return $this->objetivo;
    }

    public function setObjetivo(string $objetivo): self
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(?\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(?\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getProximaReunion(): ?\DateTimeInterface
    {
        return $this->proximaReunion;
    }

    public function setProximaReunion(?\DateTimeInterface $proximaReunion): self
    {
        $this->proximaReunion = $proximaReunion;

        return $this;
    }

    public function getItinerario(): ?string
    {
        return $this->itinerario;
    }

    public function setItinerario(string $itinerario): self
    {
        $this->itinerario = $itinerario;

        return $this;
    }

    public function isAutorizacion(): ?bool
    {
        return $this->autorizacion;
    }

    public function setAutorizacion(bool $autorizacion): self
    {
        $this->autorizacion = $autorizacion;

        return $this;
    }

    public function getEstatus(): ?int
    {
        return $this->estatus;
    }

    public function setEstatus(int $estatus): self
    {
        $this->estatus = $estatus;

        return $this;
    }


}
