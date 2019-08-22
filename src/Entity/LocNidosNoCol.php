<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocNidosNoColRepository")
 */
class LocNidosNoCol
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("territorio")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $fachada;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $trasera;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $lateralDerecho;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $lateralIzquierdo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $patioInterior;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("territorio")
     */
    private $numPiso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Emplazamiento")
     * @Groups("territorio")
     */
    private $emplazamiento;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $huso;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lon;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Territorio", mappedBy="locNidos", cascade={"persist", "remove"})
     */
    private $territorio;

    public function getId()
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

    public function getPatioInterior()
    {
        return $this->patioInterior;
    }

    public function setPatioInterior(bool $patioInterior): self
    {
        $this->patioInterior = $patioInterior;

        return $this;
    }

    public function getNumPiso()
    {
        return $this->numPiso;
    }

    public function setNumPiso(int $numPiso): self
    {
        $this->numPiso = $numPiso;

        return $this;
    }

    public function getEmplazamiento()
    {
        return $this->emplazamiento;
    }

    public function setEmplazamiento(Emplazamiento $emplazamiento): self
    {
        $this->emplazamiento = $emplazamiento;

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

    public function getTerritorio()
    {
        return $this->territorio;
    }

    public function setTerritorio(Territorio $territorio): self
    {
        $this->territorio = $territorio;

        // set (or unset) the owning side of the relation if necessary
        $newLocNidos = $territorio === null ? null : $this;
        if ($newLocNidos !== $territorio->getLocNidos()) {
            $territorio->setLocNidos($newLocNidos);
        }

        return $this;
    }
    
    public function __toString(){
        
        return (string) $this->id;
        
    }
}
