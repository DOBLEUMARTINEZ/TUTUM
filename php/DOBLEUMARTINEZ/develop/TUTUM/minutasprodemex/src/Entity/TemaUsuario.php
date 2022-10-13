<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemaUsuario
 *
 * @ORM\Table(name="tema_usuario", indexes={@ORM\Index(name="IDX_AFB0098B67B3B43D", columns={"id_usuario"}), @ORM\Index(name="IDX_AFB0098B1F55203D", columns={"id_tema"})})
 * @ORM\Entity
 */
class TemaUsuario
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
     * @var \TemaMinuta
     *
     * @ORM\ManyToOne(targetEntity="TemaMinuta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tema", referencedColumnName="id")
     * })
     */
    private $idTema;

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

    public function getIdTema(): ?TemaMinuta
    {
        return $this->idTema;
    }

    public function setIdTema(?TemaMinuta $idTema): self
    {
        $this->idTema = $idTema;

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
