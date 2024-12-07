<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de l'activité est obligatoire.")]
    #[Assert\Length(min: 3, max: 255, minMessage: "Le nom de l'activité doit comporter au moins {{ limit }} caractères.", maxMessage: "Le nom de l'activité ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $nomAC = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual(
        value: "today",
        message: "La date de l'activité ne peut pas être dans le passé."
    )]
    #[Assert\NotNull(message: "La date de l'activité est obligatoire.")]

    private ?\DateTimeInterface $dateAC = null;


    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure de l'activité est obligatoire.")]
    private \DateTimeInterface $HeureAC;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type d'activité est obligatoire.")]
    #[Assert\Length(min: 3, max: 255, minMessage: "Le nom de l'activité doit comporter au moins {{ limit }} caractères.",
        maxMessage: "Le nom de l'activité ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $typeAC = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Assert\All([
        new Assert\Type("string"),  // Ensure each item in the array is a string
    ])]
    private array $RappelAC = [];

    #[ORM\ManyToOne(inversedBy: 'activites')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: "L'utilisateur est obligatoire.")]
    private ?User $user = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAC(): ?string
    {
        return $this->nomAC;
    }

    public function setNomAC(string $nomAC): static
    {
        $this->nomAC = $nomAC;

        return $this;
    }

    public function getDateAC(): ?\DateTimeInterface
    {
        return $this->dateAC;
    }

    public function setDateAC(\DateTimeInterface $dateAC): static
    {
        $this->dateAC = $dateAC;

        return $this;
    }

    public function getHeureAC(): ?\DateTimeInterface
    {
        return $this->HeureAC;
    }

    public function setHeureAC(\DateTimeInterface $HeureAC): static
    {
        $this->HeureAC = $HeureAC;

        return $this;
    }

    public function getTypeAC(): ?string
    {
        return $this->typeAC;
    }

    public function setTypeAC(string $typeAC): static
    {
        $this->typeAC = $typeAC;

        return $this;
    }

    public function getRappelAC(): array
    {
        return $this->RappelAC;
    }

    public function setRappelAC(array $RappelAC): static
    {
        $this->RappelAC = $RappelAC;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

}
