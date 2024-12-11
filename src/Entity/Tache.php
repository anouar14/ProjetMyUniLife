<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de la tâche est obligatoire.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Le nom de la tâche ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $nomT = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description de la tâche est obligatoire.")]
    private ?string $desT = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\LessThanOrEqual(
    propertyPath: "dateFin",
    message: "La date de début doit être inférieure ou égale à la date de fin."
    )]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de début est obligatoire.")]
    
    private ?\DateTimeInterface $timeOn = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de fin est obligatoire.")]
    private ?\DateTimeInterface $timeOut = null;

    #[ORM\Column]
    private ?bool $statutT = false;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomT(): ?string
    {
        return $this->nomT;
    }

    public function setNomT(string $nomT): static
    {
        $this->nomT = $nomT;

        return $this;
    }

    public function getDesT(): ?string
    {
        return $this->desT;
    }

    public function setDesT(string $desT): static
    {
        $this->desT = $desT;

        return $this;
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

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getTimeOn(): ?\DateTimeInterface
    {
        return $this->timeOn;
    }

    public function setTimeOn(\DateTimeInterface $timeOn): static
    {
        $this->timeOn = $timeOn;

        return $this;
    }

    public function getTimeOut(): ?\DateTimeInterface
    {
        return $this->timeOut;
    }

    public function setTimeOut(\DateTimeInterface $timeOut): static
    {
        $this->timeOut = $timeOut;

        return $this;
    }

    public function isStatutT(): ?bool
    {
        return $this->statutT;
    }

    public function setStatutT(bool $statutT): static
    {
        $this->statutT = $statutT;

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
