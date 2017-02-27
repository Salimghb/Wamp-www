<?php

namespace Salim\PlateformeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Salim\PlateformeBundle\Entity\Category;

class LoadCategory implements FixtureInterface
{
	//On met en paramètre notre entity manager
	public function load (ObjectManager $manager)
	{

		//Liste des catégories à ajouter
		$names = array(
			'Développement Web',
			'Développement Mobile',
			'Graphisme',
			'Intégration',
			'Réseau',
			);

		foreach ($names as $name) {
			//Création de la catégorie
			$category = new Category();
			$category -> setName($name);
			//On la persiste
			$manager->persist($category);
		}

		//On enregistre dans la base toutes les catégories persistées
		$manager->flush();

	}

}