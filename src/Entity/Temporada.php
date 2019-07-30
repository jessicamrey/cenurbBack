<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemporadaRepository")
 */
class Temporada
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Groups("colonia")
     */
    private $anno;

    /**
     * @ORM\Column(type="boolean")
     */
    private $abierta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnno(): ?int
    {
        return $this->anno;
    }

    public function setAnno(int $anno): self
    {
        $this->anno = $anno;

        return $this;
    }

    public function getAbierta(): ?bool
    {
        return $this->abierta;
    }

    public function setAbierta(bool $abierta): self
    {
        $this->abierta = $abierta;

        return $this;
    }
}
