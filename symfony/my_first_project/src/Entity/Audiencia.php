<?php

namespace App\Entity;

use App\Repository\AudienciaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AudienciaRepository::class)
 */
class Audiencia
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
    private $id_usuario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_minuta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $asistencia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estatus;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $observacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUsuario(): ?string
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(string $id_usuario): self
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    public function getIdMinuta(): ?string
    {
        return $this->id_minuta;
    }

    public function setIdMinuta(string $id_minuta): self
    {
        $this->id_minuta = $id_minuta;

        return $this;
    }

    public function getAsistencia(): ?string
    {
        return $this->asistencia;
    }

    public function setAsistencia(string $asistencia): self
    {
        $this->asistencia = $asistencia;

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

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }
}
