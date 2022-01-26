<?php

namespace App\Entity;

use App\Repository\MinutaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MinutaRepository::class)
 */
class Minuta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objetivo;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecha_inicio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecha_fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $proxima_reunion;

    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $itinerario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autorizacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estatus;


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

    public function getItinerario()
    {
        return $this->itinerario;
    }

    public function setItinerario($itinerario): self
    {
        $this->itinerario = $itinerario;

        return $this;
    }

    public function getAutorizacion(): ?string
    {
        return $this->autorizacion;
    }

    public function setAutorizacion(string $autorizacion): self
    {
        $this->autorizacion = $autorizacion;

        return $this;
    }

    public function getEstatus(): ?string
    {
        return $this->estatus;
    }

    public function setEstatus(string $estatus): self
    {
        $this->estatus = $estatus;

        return $this;
    }

    public function getFechaInicio(): ?string
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(string $fecha_inicio): self
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?string
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(string $fecha_fin): self
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getProximaReunion(): ?string
    {
        return $this->proxima_reunion;
    }

    public function setProximaReunion(string $proxima_reunion): self
    {
        $this->proxima_reunion = $proxima_reunion;

        return $this;
    }
}
