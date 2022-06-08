<?php

namespace App\Entity;

use App\Repository\AvionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvionRepository::class)]
class Avion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $constructeur;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'integer')]
    private $nb_livraison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConstructeur(): ?string
    {
        return $this->constructeur;
    }

    public function setConstructeur(string $constructeur): self
    {
        $this->constructeur = $constructeur;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getNbLivraison(): ?int
    {
        return $this->nb_livraison;
    }

    public function setNbLivraison(int $nb_livraison): self
    {
        $this->nb_livraison = $nb_livraison;

        return $this;
    }
}
