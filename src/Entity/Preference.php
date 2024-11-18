<?php

namespace App\Entity;

use App\Repository\PreferenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreferenceRepository::class)]
class Preference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typePr = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
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
