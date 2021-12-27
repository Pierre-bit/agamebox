<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JeuxRepository")
 */
class Jeux
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anneeSortie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $support;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $editeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $developpeur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bibliotheque", mappedBy="Jeux")
     */
    private $Jeux;

    public function __construct()
    {
        $this->Jeux = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAnneeSortie(): ?string
    {
        return $this->anneeSortie;
    }

    public function setAnneeSortie(string $anneeSortie): self
    {
        $this->anneeSortie = $anneeSortie;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->support;
    }

    public function setSupport(string $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getDeveloppeur(): ?string
    {
        return $this->developpeur;
    }

    public function setDeveloppeur(string $developpeur): self
    {
        $this->developpeur = $developpeur;

        return $this;
    }

    /**
     * @return Collection|Bibliotheque[]
     */
    public function getJeux(): Collection
    {
        return $this->Jeux;
    }

    public function addJeux(Bibliotheque $jeux): self
    {
        if (!$this->Jeux->contains($jeux)) {
            $this->Jeux[] = $jeux;
            $jeux->setJeux($this);
        }

        return $this;
    }

    public function removeJeux(Bibliotheque $jeux): self
    {
        if ($this->Jeux->contains($jeux)) {
            $this->Jeux->removeElement($jeux);
            // set the owning side to null (unless already changed)
            if ($jeux->getJeux() === $this) {
                $jeux->setJeux(null);
            }
        }

        return $this;
    }
}
