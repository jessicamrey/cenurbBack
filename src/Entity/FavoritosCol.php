<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FavoritosColRepository")
 */
class FavoritosCol
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Colonia")
     */
    private $colonia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SegUsu", inversedBy="coloniasFavoritas")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColonia()
    {
        return $this->colonia;
    }

    public function setColonia(?Colonia $colonia): self
    {
        $this->colonia = $colonia;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario(?SegUsu $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
