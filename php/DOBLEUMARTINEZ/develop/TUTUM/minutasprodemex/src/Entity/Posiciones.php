<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posiciones
 *
 * @ORM\Table(name="posiciones", indexes={@ORM\Index(name="iduser", columns={"id_usuario"})})
 * @ORM\Entity
 */
class Posiciones
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
     * @ORM\Column(name="posicion", type="integer", nullable=false)
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosicion(): ?int
    {
        return $this->posicion;
    }

    public function setPosicion(int $posicion): self
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


}
