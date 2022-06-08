<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'text')]
    private $description_produit;

    #[ORM\Column(type: 'string', length: 255)]
    private $saison_produit;

    #[ORM\Column(type: 'string', length: 255)]
    private $valeur_nutritionnelle;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->description_produit;
    }

    public function setDescriptionProduit(string $description_produit): self
    {
        $this->description_produit = $description_produit;

        return $this;
    }

    public function getSaisonProduit(): ?string
    {
        return $this->saison_produit;
    }

    public function setSaisonProduit(string $saison_produit): self
    {
        $this->saison_produit = $saison_produit;

        return $this;
    }

    public function getValeurNutritionnelle(): ?string
    {
        return $this->valeur_nutritionnelle;
    }

    public function setValeurNutritionnelle(string $valeur_nutritionnelle): self
    {
        $this->valeur_nutritionnelle = $valeur_nutritionnelle;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
