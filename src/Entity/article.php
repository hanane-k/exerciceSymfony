<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\articleRepository")
 */
class article
{
    /**
     * @ORM\Id()</html>

     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Création;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Auteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Catégorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbVue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getCréation(): ?string
    {
        return $this->Création;
    }

    public function setCréation(string $Création): self
    {
        $this->Création = $Création;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getCatégorie(): ?string
    {
        return $this->Catégorie;
    }

    public function setCatégorie(string $Catégorie): self
    {
        $this->Catégorie = $Catégorie;

        return $this;
    }

    public function getNbVue(): ?int
    {
        return $this->NbVue;
    }

    public function setNbVue(int $NbVue): self
    {
        $this->NbVue = $NbVue;

        return $this;
    }

    public function recupCarac() {
        $result = substr($Contenu, 50);
        return $return;
    }

    public function getArticles() {
        $req = $db->prepare("SELECT * FROM article WHERE id = :id ORDER BY id DESC");
        $result = $req->execute([
            "id" => $this->getId()
        ]);
    }

    public function __construct() {
        
    }
}
