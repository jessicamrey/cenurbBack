<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VisitasTerritorioRepository")
 */
class VisitasTerritorio
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
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $hora;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $huso;

    /**
     * @ORM\Column(type="float")
     */
    private $coord_X;

    /**
     * @ORM\Column(type="float")
     */
    private $coord_Y;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ObservacionesTerritorio")
     */
    private $observaciones;

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
    
    public function getFecha(): \DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): \DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

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

    public function getCoordX(): float
    {
        return $this->coord_X;
    }

    public function setCoordX(float $coord_X): self
    {
        $this->coord_X = $coord_X;

        return $this;
    }

    public function getCoordY(): float
    {
        return $this->coord_Y;
    }

    public function setCoordY(float $coord_Y): self
    {
        $this->coord_Y = $coord_Y;

        return $this;
    }

    public function getObservaciones(): ObservacionesTerritorio
    {
        return $this->observaciones;
    }

    public function setObservaciones(ObservacionesTerritorio $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}
