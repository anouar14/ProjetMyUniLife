<?php

namespace App\Entity;

use App\Repository\PreferenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: PreferenceRepository::class)]
class Preference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le type de la préférence est obligatoire.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "Le type de préférence doit comporter au moins 3 caractères.", maxMessage: "Le type de préférence ne peut pas dépasser 255 caractères.")]
    private ?string $typePr = null;
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: "La date de l'activité est obligatoire.")]
    private ?\DateTimeInterface $disponibiliteAC = null;

    #[ORM\ManyToOne(inversedBy: 'preferences')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypePr(): ?string
    {
        return $this->typePr;
    }

    public function setTypePr(string $typePr): static
    {
        $this->typePr = $typePr;

        return $this;
    }

    public function getDisponibiliteAC(): ?\DateTimeInterface
    {
        return $this->disponibiliteAC;
    }

    public function setDisponibiliteAC(\DateTimeInterface $disponibiliteAC): static
    {
        $this->disponibiliteAC = $disponibiliteAC;

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
