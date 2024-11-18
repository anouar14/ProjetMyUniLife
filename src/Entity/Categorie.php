<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomCat = null;

    #[ORM\Column]
    private ?float $montanMax = null;

    #[ORM\Column]
    private ?float $montantCat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCat(): ?string
    {
        return $this->nomCat;
    }

    public function setNomCat(string $nomCat): static
    {
        $this->nomCat = $nomCat;

        return $this;
    }

    public function getMontanMax(): ?float
    {
        return $this->montanMax;
    }

    public function setMontanMax(float $montanMax): static
    {
        $this->montanMax = $montanMax;

        return $this;
    }

    public function getMontantCat(): ?float
    {
        return $this->montantCat;
    }

    public function setMontantCat(float $montantCat): static
    {
        $this->montantCat = $montantCat;

        return $this;
    }
}
