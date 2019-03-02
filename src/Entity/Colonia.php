<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"usuario": "exact", 
 * 												"nombre": "partial", 
 * 												"barrio": "partial", 
 * 												"calleNumPiso": "partial",
 * 												"nombreCentro": "partial", 
 * 												"tipoPropiedad": "exact", 
 * 												"tipoEdificio": "exact",
 * 												"ccaa": "exact", 
 * 												"provincia": "exact", 
 * 												"municipio": "exact"})
 * @ApiFilter(NumericFilter::class, properties={"temporada", "especie"})
 * @ApiFilter(RangeFilter::class, properties={"temporada"})
 * @ApiFilter(BooleanFilter::class, properties={"vacio"})
 * @ORM\Entity(repositoryClass="App\Repository\ColoniaRepository")
 */
class Colonia
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $barrio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $calleNumPiso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreCentro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPropiedad")
     */
    private $tipoPropiedad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoEdificio")
     */
    private $tipoEdificio;

    /**
     * @ORM\Column(type="integer")
     */
    private $temporada;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LocNidosCol", cascade={"persist", "remove"})
     */
    private $locNidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vacio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VisitasColonia", mappedBy="colonia")
     */
    private $visitasColonias;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ccaa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $municipio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OtrasEspecies", mappedBy="colonia")
     */
    private $otrasEspecies;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $especie;

    public function __construct()
    {
        $this->visitasColonias = new ArrayCollection();
        $this->otrasEspecies = new ArrayCollection();
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
    

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getBarrio(): string
    {
        return $this->barrio;
    }

    public function setBarrio(string $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getCalleNumPiso(): string
    {
        return $this->calleNumPiso;
    }

    public function setCalleNumPiso(string $calleNumPiso): self
    {
        $this->calleNumPiso = $calleNumPiso;

        return $this;
    }

    public function getNombreCentro(): string
    {
        return $this->nombreCentro;
    }

    public function setNombreCentro(string $nombreCentro): self
    {
        $this->nombreCentro = $nombreCentro;

        return $this;
    }

    public function getTipoPropiedad(): TipoPropiedad
    {
        return $this->tipoPropiedad;
    }

    public function setTipoPropiedad(TipoPropiedad $tipoPropiedad): self
    {
        $this->tipoPropiedad = $tipoPropiedad;

        return $this;
    }

    public function getTipoEdificio(): TipoEdificio
    {
        return $this->tipoEdificio;
    }

    public function setTipoEdificio(TipoEdificio $tipoEdificio): self
    {
        $this->tipoEdificio = $tipoEdificio;

        return $this;
    }

    public function getTemporada(): int
    {
        return $this->temporada;
    }

    public function setTemporada(int $temporada): self
    {
        $this->temporada = $temporada;

        return $this;
    }

    public function getLocNidos(): LocNidosCol
    {
        return $this->locNidos;
    }

    public function setLocNidos(LocNidosCol $locNidos): self
    {
        $this->locNidos = $locNidos;

        return $this;
    }

    public function getVacio(): bool
    {
        return $this->vacio;
    }

    public function setVacio(bool $vacio): self
    {
        $this->vacio = $vacio;

        return $this;
    }

    /**
     * @return Collection|VisitasColonia[]
     */
    public function getVisitasColonias(): Collection
    {
        return $this->visitasColonias;
    }

    public function addVisitasColonia(VisitasColonia $visitasColonia): self
    {
        if (!$this->visitasColonias->contains($visitasColonia)) {
            $this->visitasColonias[] = $visitasColonia;
            $visitasColonia->setColonia($this);
        }

        return $this;
    }

    public function removeVisitasColonia(VisitasColonia $visitasColonia): self
    {
        if ($this->visitasColonias->contains($visitasColonia)) {
            $this->visitasColonias->removeElement($visitasColonia);
            // set the owning side to null (unless already changed)
            if ($visitasColonia->getColonia() === $this) {
                $visitasColonia->setColonia(null);
            }
        }

        return $this;
    }

    public function getCcaa(): string
    {
        return $this->ccaa;
    }

    public function setCcaa(string $ccaa): self
    {
        $this->ccaa = $ccaa;

        return $this;
    }

    public function getProvincia(): string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

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

    /**
     * @return Collection|OtrasEspecies[]
     */
    public function getOtrasEspecies(): Collection
    {
        return $this->otrasEspecies;
    }

    public function addOtrasEspecy(OtrasEspecies $otrasEspecy): self
    {
        if (!$this->otrasEspecies->contains($otrasEspecy)) {
            $this->otrasEspecies[] = $otrasEspecy;
            $otrasEspecy->setColonia($this);
        }

        return $this;
    }

    public function removeOtrasEspecy(OtrasEspecies $otrasEspecy): self
    {
        if ($this->otrasEspecies->contains($otrasEspecy)) {
            $this->otrasEspecies->removeElement($otrasEspecy);
            // set the owning side to null (unless already changed)
            if ($otrasEspecy->getColonia() === $this) {
                $otrasEspecy->setColonia(null);
            }
        }

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
