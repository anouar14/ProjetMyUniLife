<?php

namespace App\Entity;

use App\Repository\SessionrevisionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionrevisionRepository::class)]
class Sessionrevision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column]
    private ?int $dureeAllouee = null;

    #[ORM\Column(nullable: true)]
    private ?int $dureeReelle = null;

    #[ORM\Column(nullable: true)]
    private ?bool $objectifAtteint = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'sessions')]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Matiere::class, inversedBy: 'sessions')]
    private ?Matiere $matiere = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDureeAllouee(): ?int
    {
        return $this->dureeAllouee;
    }

    public function setDureeAllouee(int $dureeAllouee): static
    {
        $this->dureeAllouee = $dureeAllouee;

        return $this;
    }

    public function getdureeReelle(): ?int
    {
        return $this->dureeReelle;
    }

    public function setdureeReelle(?int $dureeReelle): static
    {
        $this->dureeReelle = $dureeReelle;

        return $this;
    }

    public function isObjectifAtteint(): ?bool
    {
        return $this->objectifAtteint;
    }

    public function setObjectifAtteint(?bool $objectifAtteint): static
    {
        $this->objectifAtteint = $objectifAtteint;

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

    public function getMatiere(): ?Matiere
    {
        return $this->matiere;
    }

    public function setMatiere(?Matiere $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
    }
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }
    public function getDescription(): ?string
{
    return $this->description;
}

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
