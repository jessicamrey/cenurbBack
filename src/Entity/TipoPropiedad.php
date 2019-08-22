<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TipoPropiedadRepository")
 */
class TipoPropiedad
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
    private $Description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
