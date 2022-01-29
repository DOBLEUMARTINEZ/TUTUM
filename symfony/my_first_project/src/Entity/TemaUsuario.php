<?php

namespace App\Entity;

use App\Repository\TemaUsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TemaUsuarioRepository::class)
 */
class TemaUsuario
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
    private $id_tema;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTema(): ?string
    {
        return $this->id_tema;
    }

    public function setIdTema(string $id_tema): self
    {
        $this->id_tema = $id_tema;

        return $this;
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
}
