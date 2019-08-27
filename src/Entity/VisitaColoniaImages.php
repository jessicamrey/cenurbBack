<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisitaColoniaImagesRepository")
 * @Vich\Uploadable
 */
class VisitaColoniaImages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("visita")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VisitasColonia", inversedBy="visitaColoniaImages")
     */
    private $visita;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("visita")
     */
    private $image;
    
    
    /**
     * @Vich\UploadableField(mapping="VisitaColonia", fileNameProperty="image")
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
     * @Groups("visita")
     */
    private $fileName;
    

    public function getId()
    {
        return $this->id;
    }

    public function getVisita()
    {
        return $this->visita;
    }

    public function setVisita(?VisitasColonia $visita): self
    {
        $this->visita = $visita;

        return $this;
    }
    
    public function getImage()
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
    		
    	}
    
    }
    public function getImageFile()
    {
    	return $this->imageFile;
    }
    
    public function getFileName()
    {
    	return $this->fileName;
    }
    
    public function setFileName(?string $fileName): self
    {
    	$this->fileName = $fileName;
    
    	return $this;
    }
    
    public function __toString(){
        
        return (string) $this->id;
        
    }
}
