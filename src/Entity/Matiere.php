<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $sessionRev = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $ressources = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSessionRev(): ?array
    {
        return $this->sessionRev;
    }

    public function setSessionRev(?array $sessionRev): static
    {
        $this->sessionRev = $sessionRev;

        return $this;
    }

    public function getRessources(): ?array
    {
        return $this->ressources;
    }

    public function setRessources(?array $ressources): static
    {
        $this->ressources = $ressources;

        return $this;
    }
}
