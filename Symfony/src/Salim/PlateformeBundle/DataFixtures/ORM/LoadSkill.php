<?php

namespace Salim\PlateformeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Salim\PlateformeBundle\Entity\Skill;

class LoadSkill implements FixtureInterface
{
	//On met en paramètre notre entity manager
	public function load (ObjectManager $manager)
	{

		//Liste des compétences à ajouter
		$names = array(
			'PHP', 
			'Symfony', 
			'C++', 
			'Java', 
			'Photoshop', 
			'Blender', 
			'Bloc-note'
			);

		foreach ($names as $name) {
			//Création de la compétence
			$skill = new Skill();
			$skill -> setName($name);
			//On la persiste
			$manager->persist($skill);
		}

		//On enregistre dans la base toutes les catégories persistées
		$manager->flush();

	}

}