<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BibliothequeRepository")
 */
class Bibliotheque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $favoris;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jeuxPossedes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jeuxSouhaites;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="User")
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jeux", inversedBy="Jeux")
     */
    private $Jeux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFavoris(): ?string
    {
        return $this->favoris;
    }

    public function setFavoris(?string $favoris): self
    {
        $this->favoris = $favoris;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getJeuxPossedes(): ?string
    {
        return $this->jeuxPossedes;
    }

    public function setJeuxPossedes(?string $jeuxPossedes): self
    {
        $this->jeuxPossedes = $jeuxPossedes;

        return $this;
    }

    public function getJeuxSouhaites(): ?string
    {
        return $this->jeuxSouhaites;
    }

    public function setJeuxSouhaites(?string $jeuxSouhaites): self
    {
        $this->jeuxSouhaites = $jeuxSouhaites;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getJeux(): ?Jeux
    {
        return $this->Jeux;
    }

    public function setJeux(?Jeux $Jeux): self
    {
        $this->Jeux = $Jeux;

        return $this;
    }
}
