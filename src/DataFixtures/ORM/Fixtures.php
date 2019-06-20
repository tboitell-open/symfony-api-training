<?php

namespace App\DataFixtures\ORM;

use App\Entity\Greenspace;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
	public function load(ObjectManager $manager)
	{
		$geodata = json_decode(file_get_contents(__DIR__ . '/../../../vendor/espaces_verts.json'));
		foreach ($geodata as $entrie)
		{
			$greenspace = new Greenspace();
			$greenspace->setNomEv($entrie->fields->nom_ev);
			$greenspace->setTypeEv($entrie->fields->type_ev);
			$greenspace->setCategorie($entrie->fields->categorie);
//			$greenspace->setAnneeOuverture($entrie->fields->annee_ouverture);
//			$greenspace->setAnneeRenovation($entrie->fields->annee_renovation);
//			$greenspace->setAncienNomEv($entrie->fields->ancien_nom_ev);
			$greenspace->setAdresseNumero($entrie->fields->adresse_numero);
			$greenspace->setAdresseTypevoie($entrie->fields->adresse_typevoie);
//			$greenspace->setAdresseComplement($entrie->fields->adresse_complement);
			$greenspace->setAdresseCodepostal($entrie->fields->adresse_codepostal);
//			$greenspace->setNbEntites($entrie->fields->nb_entites);
			$greenspace->setIdAtelierSurveillance($entrie->fields->id_atelier_surveillance);
//			$greenspace->setOuvertFerme($entrie->fields->ouvert_ferme);
			$greenspace->setCompetence($entrie->fields->competence);
			$greenspace->setAdresseLibellevoie($entrie->fields->adresse_libellevoie);
//			$greenspace->setProprietaire($entrie->fields->proprietaire);
//			$greenspace->setGestionnaire($entrie->fields->gestionnnaire);
//			$greenspace->setPresenceCloture($entrie->fields->gestionnnaire);
			$greenspace->setIdDivision($entrie->fields->id_division);
			$greenspace->setIdAtelierHorticole($entrie->fields->id_atelier_horticole);
			$greenspace->setIda3dEnb($entrie->fields->ida3d_enb);
			$greenspace->setIdEqpt($entrie->fields->id_eqpt);
//			$greenspace->setSiteVilles($entrie->fields->site_villes);				
//			$greenspace->setDateDebutValidite($entrie->fields->date_debut_validite);
//			$greenspace->setDateFinValidite($entrie->fields->date_fin_validite);
			$greenspace->setPolyArea($entrie->fields->poly_area);
			$greenspace->setSurfaceHorticole($entrie->fields->surface_horticole);
			$greenspace->setSurfaceTotaleReelle($entrie->fields->surface_totale_reelle);
			$greenspace->setPerimeter($entrie->fields->perimeter);
			print_r($greenspace);
		}
	}
}
