<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom de la catégorie est obligatoire.')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le nom de la catégorie ne doit pas dépasser 255 caractères.'
    )]
    private ?string $nomCat = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Le montant maximum est obligatoire.')]
    #[Assert\Positive(message: 'Le montant maximum doit être un nombre positif.')]
    private ?float $montanMax = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Le montant de la catégorie est obligatoire.')]
    #[Assert\PositiveOrZero(message: 'Le montant de la catégorie ne peut pas être négatif.')]
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

    public function isMontantExceeded(): bool
    {
        return $this->montantCat > $this->montanMax;
    }
}
