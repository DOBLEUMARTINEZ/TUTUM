<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroMinuta
 *
 * @ORM\Table(name="registro_minuta")
 * @ORM\Entity
 */
class RegistroMinuta
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
     * @var string|null
     *
     * @ORM\Column(name="opcion", type="string", length=255, nullable=true)
     */
    private $opcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="respuesta", type="string", length=255, nullable=true)
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

    public function setOpcion(?string $opcion): self
    {
        $this->opcion = $opcion;

        return $this;
    }

    public function getRespuesta(): ?string
    {
        return $this->respuesta;
    }

    public function setRespuesta(?string $respuesta): self
    {
        $this->respuesta = $respuesta;

        return $this;
    }


}
