<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\FavoritosTerrRepository")
 */
class FavoritosTerr
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Territorio", inversedBy="territoriosFavoritos")
     */
    private $territorio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SegUsu", inversedBy="territoriosFavoritos")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerritorio(): ?Territorio
    {
        return $this->territorio;
    }

    public function setTerritorio(?Territorio $territorio): self
    {
        $this->territorio = $territorio;

        return $this;
    }

    public function getUsuario(): ?SegUsu
    {
        return $this->usuario;
    }

    public function setUsuario(?SegUsu $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
