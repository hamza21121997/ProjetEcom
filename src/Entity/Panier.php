<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $etatpanier;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="paniers")
     */
    private $iduser;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="paniers")
     */
    private $idproduit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
    }

    public function setIdproduit(int $idproduit): self
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    public function getEtatpanier(): ?string
    {
        return $this->etatpanier;
    }

    public function setCode(string $etatpanier): self
    {
        $this->etatpanier = $etatpanier;

        return $this;
    }
}
