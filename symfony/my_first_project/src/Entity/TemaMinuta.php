<?php

namespace App\Entity;

use App\Repository\TemaMinutaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TemaMinutaRepository::class)
 */
class TemaMinuta
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
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $compromiso_inicio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $compromiso_fin;

    /**
     * @ORM\Column(type="text", length=16000)
     */
    private $requerimiento;

    /**
     * @ORM\Column(type="text", length=16000)
     */
    private $linea_guia;

    /**
     * @ORM\Column(type="text", length=16000)
     */
    private $compromiso_accion;

    /**
     * @ORM\Column(type="text", length=16000)
     */
    private $compromiso;

    /**
     * @ORM\Column(type="text", length=16000)
     */
    private $observacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_estatus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_reunion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_categoria;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ultimo_tema_ingresado;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ultima_modificacion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $padre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ultimo_root;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bloque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getCompromisoInicio(): ?string
    {
        return $this->compromiso_inicio;
    }

    public function setCompromisoInicio(string $compromiso_inicio): self
    {
        $this->compromiso_inicio = $compromiso_inicio;

        return $this;
    }

    public function getCompromisoFin(): ?string
    {
        return $this->compromiso_fin;
    }

    public function setCompromisoFin(string $compromiso_fin): self
    {
        $this->compromiso_fin = $compromiso_fin;

        return $this;
    }

    public function getRequerimiento(): ?string
    {
        return $this->requerimiento;
    }

    public function setRequerimiento(string $requerimiento): self
    {
        $this->requerimiento = $requerimiento;

        return $this;
    }

    public function getLineaGuia(): ?string
    {
        return $this->linea_guia;
    }

    public function setLineaGuia(string $linea_guia): self
    {
        $this->linea_guia = $linea_guia;

        return $this;
    }

    public function getCompromisoAccion(): ?string
    {
        return $this->compromiso_accion;
    }

    public function setCompromisoAccion(string $compromiso_accion): self
    {
        $this->compromiso_accion = $compromiso_accion;

        return $this;
    }

    public function getCompromiso(): ?string
    {
        return $this->compromiso;
    }

    public function setCompromiso(string $compromiso): self
    {
        $this->compromiso = $compromiso;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function getIdEstatus(): ?string
    {
        return $this->id_estatus;
    }

    public function setIdEstatus(string $id_estatus): self
    {
        $this->id_estatus = $id_estatus;

        return $this;
    }

    public function getIdReunion(): ?string
    {
        return $this->id_reunion;
    }

    public function setIdReunion(string $id_reunion): self
    {
        $this->id_reunion = $id_reunion;

        return $this;
    }

    public function getIdCategoria(): ?string
    {
        return $this->id_categoria;
    }

    public function setIdCategoria(string $id_categoria): self
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }

    public function getUltimoTemaIngresado(): ?string
    {
        return $this->ultimo_tema_ingresado;
    }

    public function setUltimoTemaIngresado(string $ultimo_tema_ingresado): self
    {
        $this->ultimo_tema_ingresado = $ultimo_tema_ingresado;

        return $this;
    }

    public function getUltimaModificacion(): ?string
    {
        return $this->ultima_modificacion;
    }

    public function setUltimaModificacion(string $ultima_modificacion): self
    {
        $this->ultima_modificacion = $ultima_modificacion;

        return $this;
    }

    public function getPadre(): ?string
    {
        return $this->padre;
    }

    public function setPadre(string $padre): self
    {
        $this->padre = $padre;

        return $this;
    }

    public function getUltimoRoot(): ?string
    {
        return $this->ultimo_root;
    }

    public function setUltimoRoot(string $ultimo_root): self
    {
        $this->ultimo_root = $ultimo_root;

        return $this;
    }

    public function getBloque(): ?string
    {
        return $this->bloque;
    }

    public function setBloque(string $bloque): self
    {
        $this->bloque = $bloque;

        return $this;
    }
}
