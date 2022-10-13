<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsableTema
 *
 * @ORM\Table(name="responsable_tema", indexes={@ORM\Index(name="usuario_2", columns={"usuario"}), @ORM\Index(name="usuario", columns={"usuario"})})
 * @ORM\Entity
 */
class ResponsableTema
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
     * @var int
     *
     * @ORM\Column(name="minuta", type="integer", nullable=false)
     */
    private $minuta;

    /**
     * @var int
     *
     * @ORM\Column(name="tema", type="integer", nullable=false)
     */
    private $tema;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario", type="integer", nullable=false)
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMinuta(): ?int
    {
        return $this->minuta;
    }

    public function setMinuta(int $minuta): self
    {
        $this->minuta = $minuta;

        return $this;
    }

    public function getTema(): ?int
    {
        return $this->tema;
    }

    public function setTema(int $tema): self
    {
        $this->tema = $tema;

        return $this;
    }

    public function getUsuario(): ?int
    {
        return $this->usuario;
    }

    public function setUsuario(int $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
