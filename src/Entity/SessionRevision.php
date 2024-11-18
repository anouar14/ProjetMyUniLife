<?php

namespace App\Entity;

use App\Repository\SessionRevisionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionRevisionRepository::class)]
class SessionRevision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column]
    private ?int $dureeAllouee = null;

    #[ORM\Column]
    private ?int $dureeReelle = null;

    #[ORM\Column(nullable: true)]
    private ?bool $objectifAtteint = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
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

    public function getDureeReelle(): ?int
    {
        return $this->dureeReelle;
    }

    public function setDureeReelle(int $dureeReelle): static
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
}
