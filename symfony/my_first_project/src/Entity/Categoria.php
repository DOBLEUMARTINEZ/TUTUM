<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaRepository::class)
 */
class Categoria
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_seccion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orden_categoria;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getIdSeccion(): ?string
    {
        return $this->id_seccion;
    }

    public function setIdSeccion(string $id_seccion): self
    {
        $this->id_seccion = $id_seccion;

        return $this;
    }

    public function getOrdenCategoria(): ?string
    {
        return $this->orden_categoria;
    }

    public function setOrdenCategoria(string $orden_categoria): self
    {
        $this->orden_categoria = $orden_categoria;

        return $this;
    }
}
