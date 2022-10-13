<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", indexes={@ORM\Index(name="IDX_64C19C1D823E37A", columns={"seccion"})})
 * @ORM\Entity
 */
class Categoria
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_categoria", type="integer", nullable=false)
     */
    private $ordenCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=45, nullable=false)
     */
    private $color;

    /**
     * @var \SeccionMinuta
     *
     * @ORM\ManyToOne(targetEntity="SeccionMinuta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seccion", referencedColumnName="id")
     * })
     */
    private $seccion;

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

    public function getOrdenCategoria(): ?int
    {
        return $this->ordenCategoria;
    }

    public function setOrdenCategoria(int $ordenCategoria): self
    {
        $this->ordenCategoria = $ordenCategoria;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getSeccion(): ?SeccionMinuta
    {
        return $this->seccion;
    }

    public function setSeccion(?SeccionMinuta $seccion): self
    {
        $this->seccion = $seccion;

        return $this;
    }


}
