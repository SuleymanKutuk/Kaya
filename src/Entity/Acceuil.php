<?php

namespace App\Entity;

use App\Repository\AcceuilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcceuilRepository::class)]
class Acceuil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $images = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $premierTexte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $deuxiemeTexte = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getPremierTexte(): ?string
    {
        return $this->premierTexte;
    }

    public function setPremierTexte(string $premierTexte): self
    {
        $this->premierTexte = $premierTexte;

        return $this;
    }

    public function getDeuxiemeTexte(): ?string
    {
        return $this->deuxiemeTexte;
    }

    public function setDeuxiemeTexte(string $deuxiemeTexte): self
    {
        $this->deuxiemeTexte = $deuxiemeTexte;

        return $this;
    }
}
