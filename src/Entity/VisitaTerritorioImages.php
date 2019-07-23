<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisitaTerritorioImagesRepository")
 * @Vich\Uploadable
 */
class VisitaTerritorioImages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("visitaTerr")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VisitasTerritorio", inversedBy="visitaTerritorioImages")
     */
    private $visita;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("visitaTerr")
     */
    private $image;
    
    
    /**
     * @Vich\UploadableField(mapping="VisitaTerritorio", fileNameProperty="image")
     * @var File
     */
    private $imageFile;
    
    /**
     * @ORM\Column(type="datetime" ,nullable=true)
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("visitaTerr")
     */
    private $fileName;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisita(): ?VisitasTerritorio
    {
        return $this->visita;
    }

    public function setVisita(?VisitasTerritorio $visita): self
    {
        $this->visita = $visita;

        return $this;
    }
    
    public function getImage(): ?string
    {
    	return $this->image;
    }
    
    public function setImage($image): self
    {
    	$this->image = $image;
    
    	return $this;
    }
    
    public function setImageFile(File $image = null)
    {
    	$this->imageFile = $image;
    	if (null !== $image) {
    		// It is required that at least one field changes if you are using doctrine
    		// otherwise the event listeners won't be called and the file is lost
    		$this->updatedAt = new \DateTimeImmutable();
    		$this->fileName=$this->image;
    	}
    
    }
    public function getImageFile()
    {
    	return $this->imageFile;
    }
    
    public function getFileName(): ?string
    {
    	return $this->fileName;
    }
    
    public function setFileName(?string $fileName): self
    {
    	$this->fileName = $fileName;
    
    	return $this;
    }
}
