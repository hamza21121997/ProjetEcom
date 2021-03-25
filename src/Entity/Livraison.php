<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivraisonRepository::class)
 */
class Livraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $adresselivraison;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $etat;

    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity=Commande::class, inversedBy="livraisons")
     */
    private $idcommande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresselivraison(): ?string
    {
        return $this->adresselivraison;
    }

    public function setAdresselivraison(string $adresselivraison): self
    {
        $this->adresselivraison = $adresselivraison;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdcommande(): ?int
    {
        return $this->idcommande;
    }

    public function setIdcommande(int $idcommande): self
    {
        $this->idcommande = $idcommande;

        return $this;
    }
}
