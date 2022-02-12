<?php

namespace App\Entity;

use App\Repository\LogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogRepository::class)
 */
class Log
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $usuario_id;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $registro_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fecha;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuarioId(): ?string
    {
        return $this->usuario_id;
    }

    public function setUsuarioId(string $usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    public function getRegistroId(): ?string
    {
        return $this->registro_id;
    }

    public function setRegistroId(string $registro_id): self
    {
        $this->registro_id = $registro_id;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(string $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }
}
