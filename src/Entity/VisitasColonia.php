<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(RangeFilter::class, properties={"fecha", "numVisita"})
 *  @ApiFilter(NumericFilter::class, properties={"numVisita"})
 *  @ApiFilter(SearchFilter::class, properties={"usuario": "exact", "colonia" : "exact"})
 *  @ApiFilter(BooleanFilter::class, properties={"completo"})
 * @ORM\Entity(repositoryClass="App\Repository\VisitasColoniaRepository")
 */
class VisitasColonia
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("visita")
     */
    private $id;



     /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;

    /**
     * @ORM\Column(type="integer")
     * @Groups("visita")
     */
    private $numVisita;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups("visita")
     */
    private $fecha;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("visita")
     */
    private $numNidos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("visita")
     */
    private $numNidosOcupados;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("visita")
     */
    private $numNidosVacios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("visita")
     */
    private $numNidosExito;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("visita")
     */
    private $completo;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Colonia", inversedBy="visitasColonias")
     * @Groups("visita")
     */
    private $colonia;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreUsuario;

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

    public function getNumVisita(): int
    {
        return $this->numVisita;
    }

    public function setNumVisita(int $numVisita): self
    {
        $this->numVisita = $numVisita;

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

    public function getNumNidos(): int
    {
        return $this->numNidos;
    }

    public function setNumNidos(int $numNidos): self
    {
        $this->numNidos = $numNidos;

        return $this;
    }

    public function getNumNidosOcupados(): int
    {
        return $this->numNidosOcupados;
    }

    public function setNumNidosOcupados(int $numNidosOcupados): self
    {
        $this->numNidosOcupados = $numNidosOcupados;

        return $this;
    }

    public function getNumNidosVacios(): int
    {
        return $this->numNidosVacios;
    }

    public function setNumNidosVacios(int $numNidosVacios): self
    {
        $this->numNidosVacios = $numNidosVacios;

        return $this;
    }

    public function getNumNidosExito(): int
    {
        return $this->numNidosExito;
    }

    public function setNumNidosExito(int $numNidosExito): self
    {
        $this->numNidosExito = $numNidosExito;

        return $this;
    }

    public function getCompleto(): bool
    {
        return $this->completo;
    }

    public function setCompleto(bool $completo): self
    {
        $this->completo = $completo;

        return $this;
    }



    public function getColonia(): ?Colonia
    {
        return $this->colonia;
    }

    public function setColonia(?Colonia $colonia): self
    {
        $this->colonia = $colonia;

        return $this;
    }
    
    public function getNombreUsuario(): string
    {
    	return $this->nombreUsuario;
    }
    
    public function setNombreUsuario(string $nombreUsuario): self
    {
    	$this->nombreUsuario = $nombreUsuario;
    
    	return $this;
    }
}
