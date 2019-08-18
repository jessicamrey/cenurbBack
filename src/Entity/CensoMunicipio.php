<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(NumericFilter::class, properties={"especie"})
 * @ApiFilter(SearchFilter::class, properties={"municipio": "exact",
 *                                             "temporada": "exact"})
 * @ORM\Entity(repositoryClass="App\Repository\CensoMunicipioRepository")
 */
class CensoMunicipio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("censo")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("censo")
     */
    private $municipio;

    /**
     * @ORM\Column(type="integer")
     * @Groups("censo")
     */
    private $especie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("censo")
     */
    private $completo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Temporada")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("censo")
     */
    private $temporada;
    
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Colonia", mappedBy="municipioAsignado")
     * @Groups("censo")
     */
    private $coloniasAsignadas;

  public function __construct()
    {
        $this->coloniasAsignadas = new ArrayCollection();
    }

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

      /**
     * @return Collection|Colonia[]
     */
    public function getColoniasAsignadas()
    {
        return $this->coloniasAsignadas;
    }
    public function addColoniasAsignada(Colonia $coloniasAsignada): self
    {
        if (!$this->coloniasAsignadas->contains($coloniasAsignada)) {
            $this->coloniasAsignadas[] = $coloniasAsignada;
            $coloniasAsignada->setMunicipioAsignado($this);
        }
        return $this;
    }
    public function removeColoniasAsignada(Colonia $coloniasAsignada): self
    {
        if ($this->coloniasAsignadas->contains($coloniasAsignada)) {
            $this->coloniasAsignadas->removeElement($coloniasAsignada);
            // set the owning side to null (unless already changed)
            if ($coloniasAsignada->getMunicipioAsignado() === $this) {
                $coloniasAsignada->setMunicipioAsignado(null);
            }
        }
        return $this;
    }
    

}
