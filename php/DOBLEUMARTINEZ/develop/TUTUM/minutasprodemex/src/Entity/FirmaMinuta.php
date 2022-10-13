<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FirmaMinuta
 *
 * @ORM\Table(name="firma_minuta")
 * @ORM\Entity
 */
class FirmaMinuta
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
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_minuta", type="integer", nullable=true)
     */
    private $idMinuta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="firma", type="integer", nullable=true)
     */
    private $firma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentarios", type="string", length=255, nullable=true)
     */
    private $comentarios;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo", type="string", length=255, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=255, nullable=false)
     */
    private $fecha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdMinuta(): ?int
    {
        return $this->idMinuta;
    }

    public function setIdMinuta(?int $idMinuta): self
    {
        $this->idMinuta = $idMinuta;

        return $this;
    }

    public function getFirma(): ?int
    {
        return $this->firma;
    }

    public function setFirma(?int $firma): self
    {
        $this->firma = $firma;

        return $this;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(?string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(?string $correo): self
    {
        $this->correo = $correo;

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
