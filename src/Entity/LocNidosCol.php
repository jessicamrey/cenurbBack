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
     * @Groups("colonia")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     * @Groups("colonia")
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

    public function getUsuario()
    {
        return $this->usuario;
    }
    
    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;
        
        return $this;
    }
    
    public function getFachada()
    {
        return $this->fachada;
    }

    public function setFachada(bool $fachada): self
    {
        $this->fachada = $fachada;

        return $this;
    }

    public function getTrasera()
    {
        return $this->trasera;
    }

    public function setTrasera(bool $trasera): self
    {
        $this->trasera = $trasera;

        return $this;
    }

    public function getLateralDerecho()
    {
        return $this->lateralDerecho;
    }

    public function setLateralDerecho(bool $lateralDerecho): self
    {
        $this->lateralDerecho = $lateralDerecho;

        return $this;
    }

    public function getLateralIzquierdo()
    {
        return $this->lateralIzquierdo;
    }

    public function setLateralIzquierdo(bool $lateralIzquierdo): self
    {
        $this->lateralIzquierdo = $lateralIzquierdo;

        return $this;
    }

    public function getPatioInferior()
    {
        return $this->patioInferior;
    }

    public function setPatioInferior(bool $patioInferior): self
    {
        $this->patioInferior = $patioInferior;

        return $this;
    }

    public function getHuso()
    {
        return $this->huso;
    }

    public function setHuso(string $huso): self
    {
        $this->huso = $huso;

        return $this;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon()
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }
}
