<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LocNidosColRepository")
 */
class LocNidosCol
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia"})
     */
    private $fachada;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia"})
     */
    private $trasera;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia"})
     */
    private $lateralDerecho;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia"})
     */
    private $lateralIzquierdo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia"})
     */
    private $patioInferior;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"colonia"})
     */
    private $huso;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"colonia"})
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"colonia"})
     */
    private $lon;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsuario(): string
    {
        return $this->usuario;
    }
    
    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;
        
        return $this;
    }
    
    public function getFachada(): bool
    {
        return $this->fachada;
    }

    public function setFachada(bool $fachada): self
    {
        $this->fachada = $fachada;

        return $this;
    }

    public function getTrasera(): bool
    {
        return $this->trasera;
    }

    public function setTrasera(bool $trasera): self
    {
        $this->trasera = $trasera;

        return $this;
    }

    public function getLateralDerecho(): bool
    {
        return $this->lateralDerecho;
    }

    public function setLateralDerecho(bool $lateralDerecho): self
    {
        $this->lateralDerecho = $lateralDerecho;

        return $this;
    }

    public function getLateralIzquierdo(): bool
    {
        return $this->lateralIzquierdo;
    }

    public function setLateralIzquierdo(bool $lateralIzquierdo): self
    {
        $this->lateralIzquierdo = $lateralIzquierdo;

        return $this;
    }

    public function getPatioInferior(): bool
    {
        return $this->patioInferior;
    }

    public function setPatioInferior(bool $patioInferior): self
    {
        $this->patioInferior = $patioInferior;

        return $this;
    }

    public function getHuso(): string
    {
        return $this->huso;
    }

    public function setHuso(string $huso): self
    {
        $this->huso = $huso;

        return $this;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }
}
