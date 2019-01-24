<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OtrasEspeciesRepository")
 */
class OtrasEspecies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Colonia", inversedBy="otrasEspecies")
     */
    private $colonia;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $especie;

    public function getId(): ?int
    {
        return $this->id;
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
    
    public function getEspecie(): int
    {
        return $this->especie;
    }
    
    public function setEspecie(int $especie): self
    {
        $this->especie = $especie;
        
        return $this;
    }
}
