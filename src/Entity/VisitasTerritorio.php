<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\NumericFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ApiFilter(DateFilter::class, properties={"fecha"})
 *  @ApiFilter(NumericFilter::class, properties={"coord_X", "coord_Y"})
 *  @ApiFilter(SearchFilter::class, properties={"usuario": "exact", "territorio" : "exact"})
 * @ORM\Entity(repositoryClass="App\Repository\VisitasTerritorioRepository")
 */
class VisitasTerritorio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"visitaTerr", "getVisitaTerr"})
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $usuario;
    
  
   //TODO: comprobar usuario al hacer un get, ya que solo puede recuperar sus visitas


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("visitaTerr")
     */
    private $huso;

    /**
     * @ORM\Column(type="float" , nullable=true)
     * @Groups({"visitaTerr"})
     */
    private $lat;

    /**
     * @ORM\Column(type="float",  nullable=true)
     * @Groups({"visitaTerr"})
     */
    private $lon;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ObservacionesTerritorio")
     *  @Groups("visitaTerr")
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Territorio", inversedBy="visitasTerritorios")
     * @Groups("visitaTerr")
     */
    private $territorio;

    /**
     * @ORM\Column(type="date")
     * @Groups("visitaTerr")
     */
    private $fecha;

    /**
     * @ORM\Column(type="time", nullable=true)
     * @Groups("visitaTerr")
     */
    private $hora;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VisitaTerritorioImages", mappedBy="visita", cascade={"persist"})
     * @Groups("visitaTerr")
     */
    private $visitaTerritorioImages;


	public function __construct()
    {
        $this->visitaTerritorioImages = new ArrayCollection();
}

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

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function setObservaciones(ObservacionesTerritorio $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getTerritorio()
    {
        return $this->territorio;
    }

    public function setTerritorio(?Territorio $territorio): self
    {
        $this->territorio = $territorio;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(?\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getVisitaTerritorioImages()
    {
    	return $this->visitaTerritorioImages;
    }
    
    public function addVisitaTerritorioImage(VisitaTerritorioImages $visitaTerritorioImage): self
    {
    	if (!$this->visitaTerritorioImages->contains($visitaTerritorioImage)) {
    		$this->visitaTerritorioImages[] = $visitaTerritorioImage;
    		$visitaTerritorioImage->setVisita($this);
    	}
    
    	return $this;
    }
    
    public function removeVisitaTerritorioImage(VisitaTerritorioImages $visitaTerritorioImage): self
    {
    	if ($this->visitaTerritorioImages->contains($visitaTerritorioImage)) {
    		$this->visitaTerritorioImages->removeElement($visitaTerritorioImage);
    		// set the owning side to null (unless already changed)
    		if ($visitaTerritorioImage->getVisita() === $this) {
    			$visitaTerritorioImage->setVisita(null);
    		}
    	}
    
    	return $this;
    }
    
    public function __toString(){
        
        return (string) $this->id;
        
    }
}
