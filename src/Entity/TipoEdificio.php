<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TipoEdificioRepository")
 */
class TipoEdificio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"colonia", "territorio"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"colonia", "territorio"})
     */
    private $descripcion;

    public function getId()
    {
        return $this->id;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }
    
    public function __toString(){
        
        return (string) $this->descripcion;
        
    }
}
