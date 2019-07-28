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
 * 												"id": "exact",
 *                                              "codColonia": "exact",
 * 												"nombre": "partial", 
 * 												"nombreCentro": "partial", 
 * 												"tipoPropiedad": "exact", 
 * 												"tipoEdificio": "exact",
 *                                              "municipioAsignado": "exact",
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
     * @Groups({"colonia","visita", "censo"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"colonia","visita", "censo"})
     */
    private $codColonia;
    
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"colonia", "visita", "censo"})
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("colonia")
     */
    private $barrio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("colonia")
     */
    private $calleNumPiso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("colonia")
     */
    private $nombreCentro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPropiedad")
     * @Groups("colonia")
     */
    private $tipoPropiedad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoEdificio")
     * @Groups("colonia")
     */
    private $tipoEdificio;




    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LocNidosCol", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Groups("colonia")
     */
    private $locNidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia", "censo"})
     */
    private $vacio;



    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("colonia")
     */
    private $ccaa;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"colonia","visita"})
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"colonia","visita", "censo"})
     */
    private $municipio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OtrasEspecies", mappedBy="colonia")
     * @Groups("colonia")
     */
    private $otrasEspecies;
    
    /**
     * @ORM\Column(type="integer")
     * @Groups("colonia")
     */
    private $especie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VisitasColonia", mappedBy="colonia")
     */
    private $visitasColonias;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Temporada")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"colonia","visita"})
     */

    private $temporada;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $validada;

      /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CensoMunicipio", inversedBy="coloniasAsignadas")
     * @Groups({"colonia"})
     */
    private $municipioAsignado;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"colonia","visita", "censo"})
     */
    private $completo;

    public function __construct()
    {
        $this->visitasColonias = new ArrayCollection();
        $this->otrasEspecies = new ArrayCollection();
        $this->censoColonias = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }
    
     public function getCodColonia()
    {
        return $this->codColonia;
    }
    
    public function setCodColonia(int $codColonia): self
    {
        $this->codColonia = $codColonia;
        
        return $this;
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

    public function getTemporada(): ?Temporada
    {
        return $this->temporada;
    }

    public function setTemporada(?Temporada $temporada): self
    {
        $this->temporada = $temporada;

        return $this;
    }

    public function getValidada(): ?bool
    {
        return $this->validada;
    }

    public function setValidada(?bool $validada): self
    {
        $this->validada = $validada;

        return $this;
    }
    
    public function getMunicipioAsignado(): ?CensoMunicipio
    {
        return $this->municipioAsignado;
    }
    public function setMunicipioAsignado(?CensoMunicipio $censo): self
    {
        $this->municipioAsignado = $censo;
        return $this;
    }
    
    public function getCompleto()
    {
        return $this->completo;
    }

    public function setCompleto(bool $completo): self
    {
        $this->completo = $completo;

        return $this;
    }


}
