<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActiviteRepository::class)]
class Activite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAC = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAC = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $HeureAC = null;

    #[ORM\Column(length: 255)]
    private ?string $typeAC = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $RappelAC = [];

    #[ORM\ManyToOne(inversedBy: 'activites')]
    #[ORM\JoinColumn(nullable: false)]
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
