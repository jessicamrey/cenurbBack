<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"usuario": "exact", 
 * 												"id": "exact",
 *                                              "codTerritorio" : "exact",
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
 * @ApiFilter(BooleanFilter::class, properties={"amenazada", "vacio"})
 * @ORM\Entity(repositoryClass="App\Repository\TerritorioRepository")
 */
class Territorio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"territorio", "visitaTerr"})
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"territorio", "visitaTerr"})
     */
    private $codTerritorio;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;
    
    /**
     * @ORM\Column(type="integer")
     * @Groups("territorio")
     */
    private $especie;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"territorio", "visitaTerr"})
     */
    private $nombre;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("territorio")
     */
    private $barrio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("territorio")
     */
    private $calleNumPiso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("territorio")
     */
    private $nombreCentro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPropiedad")
     * @Groups("territorio")
     */
    private $tipoPropiedad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoEdificio")
     * @Groups("territorio")
     */
    private $tipoEdificio;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\LocNidosNoCol",  cascade={"persist", "remove"})
     * @Groups("territorio")
     */
    private $locNidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $amenazada;



    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("territorio")
     */
    private $vacio;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("territorio")
     */
    private $ccaa;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("territorio")
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("territorio")
     */
    private $municipio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Temporada")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("territorio")
     */
    private $temporada;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoTerritorio")
     * @Groups("territorio")
     */
    private $tipo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VisitasTerritorio", mappedBy="territorio")
     */
    private $visitasTerritorios;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $validado;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FavoritosTerr", mappedBy="territorio")
     */
    private $territoriosFavoritos;

    public function __construct()
    {
        $this->visitasTerritorios = new ArrayCollection();
        $this->territoriosFavoritos = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    
     public function getCodTerritorio()
    {
        return $this->codTerritorio;
    }
    
    public function setCodTerritorio(int $codTerritorio): self
    {
        $this->codTerritorio = $codTerritorio;
        
        return $this;
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
    
    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie(int $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }



    public function getBarrio()
    {
        return $this->barrio;
    }

    public function setBarrio(string $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getCalleNumPiso()
    {
        return $this->calleNumPiso;
    }

    public function setCalleNumPiso(string $calleNumPiso): self
    {
        $this->calleNumPiso = $calleNumPiso;

        return $this;
    }

    public function getNombreCentro()
    {
        return $this->nombreCentro;
    }

    public function setNombreCentro(string $nombreCentro): self
    {
        $this->nombreCentro = $nombreCentro;

        return $this;
    }

    public function getTipoPropiedad()
    {
        return $this->tipoPropiedad;
    }

    public function setTipoPropiedad(TipoPropiedad $tipoPropiedad): self
    {
        $this->tipoPropiedad = $tipoPropiedad;

        return $this;
    }

    public function getTipoEdificio()
    {
        return $this->tipoEdificio;
    }

    public function setTipoEdificio(TipoEdificio $tipoEdificio): self
    {
        $this->tipoEdificio = $tipoEdificio;

        return $this;
    }

    public function getLocNidos()
    {
        return $this->locNidos;
    }

    public function setLocNidos(LocNidosNoCol $locNidos): self
    {
        $this->locNidos = $locNidos;

        return $this;
    }

    public function getAmenazada()
    {
        return $this->amenazada;
    }

    public function setAmenazada(bool $amenazada)
    {
        $this->amenazada = $amenazada;

        return $this;
    }


    public function getVacio()
    {
        return $this->vacio;
    }

    public function setVacio(bool $vacio): self
    {
        $this->vacio = $vacio;

        return $this;
    }

    public function getCcaa()
    {
        return $this->ccaa;
    }

    public function setCcaa(string $ccaa): self
    {
        $this->ccaa = $ccaa;

        return $this;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function setMunicipio(string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getTemporada()
    {
        return $this->temporada;
    }

    public function setTemporada(?Temporada $temporada): self
    {
        $this->temporada = $temporada;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo(?TipoTerritorio $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


    public function getVisitasTerritorios()
    {
        return $this->visitasTerritorios;
    }

    public function addVisitasTerritorio(VisitasTerritorio $visitasTerritorio): self
    {
        if (!$this->visitasTerritorios->contains($visitasTerritorio)) {
            $this->visitasTerritorios[] = $visitasTerritorio;
            $visitasTerritorio->setTerritorio($this);
        }

        return $this;
    }

    public function removeVisitasTerritorio(VisitasTerritorio $visitasTerritorio): self
    {
        if ($this->visitasTerritorios->contains($visitasTerritorio)) {
            $this->visitasTerritorios->removeElement($visitasTerritorio);
            // set the owning side to null (unless already changed)
            if ($visitasTerritorio->getTerritorio() === $this) {
                $visitasTerritorio->setTerritorio(null);
            }
        }

        return $this;
    }

    public function getValidado()
    {
        return $this->validado;
    }

    public function setValidado(?bool $validado): self
    {
        $this->validado = $validado;

        return $this;
    }

    public function getTerritoriosFavoritos()
    {
        return $this->territoriosFavoritos;
    }

    public function addTerritoriosFavorito(FavoritosTerr $territoriosFavorito): self
    {
        if (!$this->territoriosFavoritos->contains($territoriosFavorito)) {
            $this->territoriosFavoritos[] = $territoriosFavorito;
            $territoriosFavorito->setTerritorio($this);
        }

        return $this;
    }

    public function removeTerritoriosFavorito(FavoritosTerr $territoriosFavorito): self
    {
        if ($this->territoriosFavoritos->contains($territoriosFavorito)) {
            $this->territoriosFavoritos->removeElement($territoriosFavorito);
            // set the owning side to null (unless already changed)
            if ($territoriosFavorito->getTerritorio() === $this) {
                $territoriosFavorito->setTerritorio(null);
            }
        }

        return $this;
    }
    public function __toString(){
        
        return (string) $this->id;
        
    }
}
