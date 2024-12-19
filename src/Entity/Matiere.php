<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    /**
     * @var Collection<int, Sessionrevision>
     */
    #[ORM\OneToMany(mappedBy: 'matiere', targetEntity: Sessionrevision::class)]
    private Collection $sessions;

    /**
     * @var Collection<int, RessourceDeRevision>
     */
    #[ORM\OneToMany(mappedBy: 'matiere', targetEntity: RessourceDeRevision::class)]
    private Collection $ressources;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
        $this->ressources = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Sessionrevision>
     */
    public function getsessions(): Collection
    {
        return $this->sessions;
    }

    public function addSessionRevision(Sessionrevision $sessionRevision): static
    {
        if (!$this->sessions->contains($sessionRevision)) {
            $this->sessions->add($sessionRevision);
            $sessionRevision->setMatiere($this);
        }

        return $this;
    }

    public function removeSessionRevision(Sessionrevision $sessionRevision): static
    {
        if ($this->sessions->removeElement($sessionRevision)) {
            // set the owning side to null (unless already changed)
            if ($sessionRevision->getMatiere() === $this) {
                $sessionRevision->setMatiere(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RessourceDeRevision>
     */
    public function getressources(): Collection
    {
        return $this->ressources;
    }

    public function addressources(RessourceDeRevision $ressources): static
    {
        if (!$this->ressources->contains($ressources)) {
            $this->ressources->add($ressources);
            $ressources->setmatiere($this);
        }

        return $this;
    }

    public function removeressources(RessourceDeRevision $ressources): static
    {
        if ($this->ressources->removeElement($ressources)) {
            // set the owning side to null (unless already changed)
            if ($ressources->getmatiere() === $this) {
                $ressources->setmatiere(null);
            }
        }

        return $this;
    }
}
