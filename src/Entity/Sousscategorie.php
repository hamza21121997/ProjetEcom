<?php

namespace App\Entity;

use App\Repository\SousscategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SousscategorieRepository::class)
 */
class Sousscategorie
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
     * @ORM\ManyToMany(targetEntity=Souscategorie::class, inversedBy="Sousscategories")
     */
    private $idsouscat;

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

    public function getIdsouscat(): ?int
    {
        return $this->idsouscat;
    }

    public function setIdsouscat(int $idsouscat): self
    {
        $this->idsouscat = $idsouscat;

        return $this;
    }
}
