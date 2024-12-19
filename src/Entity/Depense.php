<?php

namespace App\Entity;

use App\Repository\DepenseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: DepenseRepository::class)]
class Depense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank(message: 'Le type de dépense est obligatoire.')]
    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z\s]+$/",
        message: "Le type de dépense ne doit contenir que des lettres et des espaces.")]
    #[Assert\Choice(
            choices: ['depense', 'revenu'],
            message: "Le type de dépense doit être 'depense' ou 'revenu'."
        )]
    private ?string $typeDep = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le montant est obligatoire.')]
    #[Assert\Positive(message: 'Le montant doit être supérieur à 0.')]
    private ?float $montant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de dépense est obligatoire.')]
    private ?\DateTimeInterface $dateDep = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $categorie = null;

    

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDep(): ?string
    {
        return $this->typeDep;
    }

    public function setTypeDep(string $typeDep): static
    {
        $this->typeDep = $typeDep;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateDep(): ?\DateTimeInterface
    {
        return $this->dateDep;
    }

    public function setDateDep(\DateTimeInterface $dateDep): static
    {
        $this->dateDep = $dateDep;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

   

    
}
