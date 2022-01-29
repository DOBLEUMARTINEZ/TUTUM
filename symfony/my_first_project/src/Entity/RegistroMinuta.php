<?php

namespace App\Entity;

use App\Repository\RegistroMinutaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegistroMinutaRepository::class)
 */
class RegistroMinuta
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
    private $opcion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $respuesta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpcion(): ?string
    {
        return $this->opcion;
    }

    public function setOpcion(string $opcion): self
    {
        $this->opcion = $opcion;

        return $this;
    }

    public function getRespuesta(): ?string
    {
        return $this->respuesta;
    }

    public function setRespuesta(string $respuesta): self
    {
        $this->respuesta = $respuesta;

        return $this;
    }
}
