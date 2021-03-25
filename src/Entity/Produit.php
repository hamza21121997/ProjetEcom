<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eancode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $prixttc;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $etatstock;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToMany(targetEntity=Sousscategorie::class, inversedBy="produits")
     */
    private $idsscat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEancode(): ?string
    {
        return $this->eancode;
    }

    public function setEancode(string $eancode): self
    {
        $this->eancode = $eancode;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

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

    public function getPrixttc(): ?float
    {
        return $this->prixttc;
    }

    public function setPrixttc(float $prixttc): self
    {
        $this->prixttc = $prixttc;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getEtatstock(): ?string
    {
        return $this->etatstock;
    }

    public function setEtatstock(string $etatstock): self
    {
        $this->etatstock = $etatstock;

        return $this;
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

    public function getIdsscat(): ?string
    {
        return $this->idsscat;
    }

    public function setIdsscat(string $idsscat): self
    {
        $this->idsscat = $idsscat;

        return $this;
    }
}
