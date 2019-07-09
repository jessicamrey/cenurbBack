<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"colonia": "exact",
 * 												"municipio": "exact",
                                                "temporada": "exact"})
 * @ORM\Entity(repositoryClass="App\Repository\CensoMunicipioRepository")
 */
class CensoMunicipio
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
     * @ORM\Column(type="string", length=255)
     */
    private $municipio;

    /**
     * @ORM\Column(type="integer")
     */
    private $especie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $completo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Temporada")
     * @ORM\JoinColumn(nullable=false)
     */
    private $temporada;
    
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Colonia")
     */
    private $colonia;
    


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
    
    public function getMunicipio(): string
    {
        return $this->municipio;
    }

    public function setMunicipio(string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getEspecie(): int
    {
        return $this->especie;
    }

    public function setEspecie(int $especie): self
    {
        $this->especie = $especie;

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

    public function getTemporada(): ?Temporada
    {
        return $this->temporada;
    }

    public function setTemporada(?Temporada $temporada): self
    {
        $this->temporada = $temporada;

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
    

}
