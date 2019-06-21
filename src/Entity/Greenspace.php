<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GreenspaceRepository")
 */
class Greenspace
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nsq_espace_vert;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_ev;

    /**
     * @ORM\Column(type="integer")
     */
    private $type_ev;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee_renovation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ancien_nom_ev;

    /**
     * @ORM\Column(type="integer")
     */
    private $adresse_numero = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse_typevoie;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $adresse_complement;

    /**
     * @ORM\Column(type="integer")
     */
    private $adresse_codepostal;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_entites;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_atelier_surveillance = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ouvert_ferme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse_libellevoie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proprietaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gestionnaire;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_division;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_atelier_horticole = 0;

    /**
     * @ORM\Column(type="integer", length=24)
     */
    private $ida3d_enb;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $id_eqpt;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $site_villes;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $date_debut_validite;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $date_fin_validite;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $poly_area;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface_horticole = 0;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface_totale_reelle;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $perimeter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNsqEspaceVert(): ?int
    {
        return $this->nsq_espace_vert;
    }

    public function setNsqEspaceVert(int $nsq_espace_vert): self
    {
        $this->nsq_espace_vert = $nsq_espace_vert;

        return $this;
    }

    public function getNomEv(): ?string
    {
        return $this->nom_ev;
    }

    public function setNomEv(string $nom_ev): self
    {
        $this->nom_ev = $nom_ev;

        return $this;
    }

    public function getTypeEv(): ?int
    {
        return $this->type_ev;
    }

    public function setTypeEv(int $type_ev): self
    {
        $this->type_ev = $type_ev;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getAnneeRenovation(): ?int
    {
        return $this->annee_renovation;
    }

    public function setAnneeRenovation(?int $annee_renovation): self
    {
        $this->annee_renovation = $annee_renovation;

        return $this;
    }

    public function getAnneeOuverture(): ?int
    {
        return $this->annee_ouverture;
    }

    public function setAnneeOuverture(?int $annee_ouverture): self
    {
        $this->annee_ouverture = $annee_ouverture;

        return $this;
    }

    public function getAncienNomEv(): ?string
    {
        return $this->ancien_nom_ev;
    }

    public function setAncienNomEv(?string $ancien_nom_ev): self
    {
        $this->ancien_nom_ev = $ancien_nom_ev;

        return $this;
    }

    public function getAdresseNumero(): ?int
    {
        return $this->adresse_numero;
    }

    public function setAdresseNumero(int $adresse_numero): self
    {
        $this->adresse_numero = $adresse_numero;

        return $this;
    }

    public function getAdresseTypevoie(): ?string
    {
        return $this->adresse_typevoie;
    }

    public function setAdresseTypevoie(string $adresse_typevoie): self
    {
        $this->adresse_typevoie = $adresse_typevoie;

        return $this;
    }

    public function getAdresseComplement(): ?string
    {
        return $this->adresse_complement;
    }

    public function setAdresseComplement(?string $adresse_complement): self
    {
        $this->adresse_complement = $adresse_complement;

        return $this;
    }

    public function getAdresseCodepostal(): ?int
    {
        return $this->adresse_codepostal;
    }

    public function setAdresseCodepostal(int $adresse_codepostal): self
    {
        $this->adresse_codepostal = $adresse_codepostal;

        return $this;
    }

    public function getNbEntites(): ?int
    {
        return $this->nb_entites;
    }

    public function setNbEntites(int $nb_entites): self
    {
        $this->nb_entites = $nb_entites;

        return $this;
    }

    public function getIdAtelierSurveillance(): ?int
    {
        return $this->id_atelier_surveillance;
    }

    public function setIdAtelierSurveillance(int $id_atelier_surveillance): self
    {
        $this->id_atelier_surveillance = $id_atelier_surveillance;

        return $this;
    }

    public function getOuvertFerme(): ?string
    {
        return $this->ouvert_ferme;
    }

    public function setOuvertFerme(string $ouvert_ferme): self
    {
        $this->ouvert_ferme = $ouvert_ferme;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getAdresseLibellevoie(): ?string
    {
        return $this->adresse_libellevoie;
    }

    public function setAdresseLibellevoie(string $adresse_libellevoie): self
    {
        $this->adresse_libellevoie = $adresse_libellevoie;

        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?string $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getGestionnaire(): ?string
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(?string $gestionnaire): self
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    public function getIdDivision(): ?int
    {
        return $this->id_division;
    }

    public function setIdDivision(int $id_division): self
    {
        $this->id_division = $id_division;

        return $this;
    }

    public function getIdAtelierHorticole(): ?int
    {
        return $this->id_atelier_horticole;
    }

    public function setIdAtelierHorticole(int $id_atelier_horticole): self
    {
        $this->id_atelier_horticole = $id_atelier_horticole;

        return $this;
    }

    public function getIda3dEnb(): ?string
    {
        return  $this->ida3d_enb; 
    }

    public function setIda3dEnb(string $ida3d_enb): self
    {
        $this->ida3d_enb = $ida3d_enb;

        return $this;
    }

    public function getIdEqpt(): ?string
    {
        return $this->id_eqpt;
    }

    public function setIdEqpt(string $id_eqpt): self
    {
        $this->id_eqpt = $id_eqpt;

        return $this;
    }

    public function getSiteVille(): ?string
    {
        return $this->site_ville;
    }

    public function setSiteVille(string $site_ville): self
    {
        $this->site_ville = $site_ville;

        return $this;
    }

    public function getDateDebutValidite(): ?string
    {
        return $this->date_debut_validite;
    }

    public function setDateDebutValidite(string $date_debut_validite): self
    {
        $this->date_debut_validite = $date_debut_validite;

        return $this;
    }

    public function getDateFinValidite(): ?string
    {
        return $this->date_fin_validite;
    }

    public function setDateFinValidite(string $date_fin_validite): self
    {
        $this->date_fin_validite = $date_fin_validite;

        return $this;
    }

    public function getPolyArea(): ?string
    {
        return $this->poly_area;
    }

    public function setPolyArea(string $poly_area): self
    {
        $this->poly_area = $poly_area;

        return $this;
    }

    public function getSurfaceHorticole(): ?int
    {
        return $this->surface_horticole;
    }

    public function setSurfaceHorticole(int $surface_horticole): self
    {
        $this->surface_horticole = $surface_horticole;

        return $this;
    }

    public function getSurfaceTotaleReelle(): ?int
    {
        return $this->surface_totale_reelle;
    }

    public function setSurfaceTotaleReelle(int $surface_totale_reelle): self
    {
        $this->surface_totale_reelle = $surface_totale_reelle;

        return $this;
    }
    
    public function getPerimeter(): ?string
    {
        return $this->perimeter;
    }

    public function setPerimeter(string $perimeter): self
    {
        $this->perimeter = $perimeter;

        return $this;
    }

}
