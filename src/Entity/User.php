<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $role;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $sexe;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codepostale;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telmobile;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telfixe;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresseentreprise;

    /**
     * @ORM\Column(type="string", length=30,nullable=true)
     */
    private $etatcompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cle;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $typecompte;

    /**
     * @ORM\Column(type="string", length=15,nullable=true)
     */
    private $deleted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostale(): ?int
    {
        return $this->codepostale;
    }

    public function setCodePostale(?int $codepostale): self
    {
        $this->codepostale = $codepostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelMobile(): ?string
    {
        return $this->telmobile;
    }

    public function setTelMobile(?string $telmobile): self
    {
        $this->telmobile = $telmobile;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelFixe(?string $telfixe): self
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresseentreprise;
    }

    public function setAdresseEntreprise(?string $adresseentreprise): self
    {
        $this->adresseentreprise = $adresseentreprise;

        return $this;
    }

    public function getEtatCompte(): ?string
    {
        return $this->etatcompte;
    }

    public function setEtatCompte(string $etatcompte): self
    {
        $this->etatcompte = $etatcompte;

        return $this;
    }

    public function getCle(): ?string
    {
        return $this->cle;
    }

    public function setCle(?string $cle): self
    {
        $this->cle = $cle;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typecompte;
    }

    public function setTypeCompte(?string $typecompte): self
    {
        $this->typecompte = $typecompte;

        return $this;
    }

    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    public function setDeleted(string $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }
    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles()
    {
        /*
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        */
        return array($this->role);
    }

    public function setRoles(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
