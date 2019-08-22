<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SegUsuRepository")
 * @Table(name="SEG_USU")
 */
class SegUsu implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="array")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $id_usu;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_coord;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FavoritosCol", mappedBy="usuario")
     */
    private $coloniasFavoritas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\FavoritosTerr", mappedBy="usuario")
     */
    private $territoriosFavoritos;

    public function __construct()
    {
        $this->coloniasFavoritas = new ArrayCollection();
        $this->territoriosFavoritos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getUsername()
    {
        return (string) $this->email;
    }

    public function getRoles()
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword()
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }


    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getIdUsu()
    {
        return $this->id_usu;
    }

    public function setIdUsu(string $id_usu): self
    {
        $this->id_usu = $id_usu;

        return $this;
    }

    public function getIdCoord()
    {
        return $this->id_coord;
    }

    public function setIdCoord(int $id_coord): self
    {
        $this->id_coord = $id_coord;

        return $this;
    }

    public function getColoniasFavoritas()
    {
        return $this->coloniasFavoritas;
    }

    public function addColoniasFavorita(FavoritosCol $coloniasFavorita): self
    {
        if (!$this->coloniasFavoritas->contains($coloniasFavorita)) {
            $this->coloniasFavoritas[] = $coloniasFavorita;
            $coloniasFavorita->setUsuario($this);
        }

        return $this;
    }

    public function removeColoniasFavorita(FavoritosCol $coloniasFavorita): self
    {
        if ($this->coloniasFavoritas->contains($coloniasFavorita)) {
            $this->coloniasFavoritas->removeElement($coloniasFavorita);
            // set the owning side to null (unless already changed)
            if ($coloniasFavorita->getUsuario() === $this) {
                $coloniasFavorita->setUsuario(null);
            }
        }

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
            $territoriosFavorito->setUsuario($this);
        }

        return $this;
    }

    public function removeTerritoriosFavorito(FavoritosTerr $territoriosFavorito): self
    {
        if ($this->territoriosFavoritos->contains($territoriosFavorito)) {
            $this->territoriosFavoritos->removeElement($territoriosFavorito);
            // set the owning side to null (unless already changed)
            if ($territoriosFavorito->getUsuario() === $this) {
                $territoriosFavorito->setUsuario(null);
            }
        }

        return $this;
    }
}
