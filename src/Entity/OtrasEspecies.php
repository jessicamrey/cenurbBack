<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(NumericFilter::class, properties={"especie"})
 * @ApiFilter(SearchFilter::class, properties={"colonia": "exact"})
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
     * @Groups({"colonia"})
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
