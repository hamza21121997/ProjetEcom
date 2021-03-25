<?php

namespace App\Entity;

use App\Repository\SouscategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SouscategorieRepository::class)
 */
class Souscategorie
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
    private $designation;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="Souscategories")
     */
    private $idcat;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdcat(): ?int
    {
        return $this->idcat;
    }

    public function setIdcat(int $idcat): self
    {
        $this->idcat = $idcat;

        return $this;
    }
}
