<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\Bouquet;

class LoadBouquet extends AbstractFixture implements OrderedFixtureInterface
{

	public function load(ObjectManager $manager)
	{
		
		$Bouquet1  = new Bouquet();
		$Bouquet2  = new Bouquet();
		$Bouquet3  = new Bouquet();
		$Bouquet4  = new Bouquet();
		$Bouquet5  = new Bouquet();
		$Bouquet6  = new Bouquet();
		$Bouquet7  = new Bouquet();
		$Bouquet8  = new Bouquet();
		$Bouquet9  = new Bouquet();
		$Bouquet10 = new Bouquet();
		
		$Bouquet1  -> setLibelle("Basique Livraison");
		$Bouquet2  -> setLibelle("Basique Coiffure");
		$Bouquet3  -> setLibelle("Basique Soins du corps");
		$Bouquet4  -> setLibelle("Basique Aide à domicile");
		$Bouquet5  -> setLibelle("Basique Entretien Maison");
		$Bouquet6  -> setLibelle("Basique Gardiennage");
		$Bouquet7  -> setLibelle("Détente");
		$Bouquet8  -> setLibelle("Confort");
		$Bouquet9  -> setLibelle("Premium");
		$Bouquet10 -> setLibelle("All In");
		
		$Bouquet1  -> setTarif(40.00);
		$Bouquet2  -> setTarif(90.00);
		$Bouquet3  -> setTarif(130.00);
		$Bouquet4  -> setTarif(180.00);
		$Bouquet5  -> setTarif(250.00);
		$Bouquet6  -> setTarif(300.00);
		$Bouquet7  -> setTarif(120.00);
		$Bouquet8  -> setTarif(230.00);
		$Bouquet9  -> setTarif(390.00);
		$Bouquet10 -> setTarif(670.00);


		$Bouquet1  -> addTypesService($this -> getReference('TypeService1'));

		$Bouquet2  -> addTypesService($this -> getReference('TypeService2'));

		$Bouquet3  -> addTypesService($this -> getReference('TypeService3'));

		$Bouquet4  -> addTypesService($this -> getReference('TypeService4'));

		$Bouquet5  -> addTypesService($this -> getReference('TypeService5'));
		
		$Bouquet6  -> addTypesService($this -> getReference('TypeService6'));
		
		$Bouquet7  -> addTypesService($this -> getReference('TypeService1'));
		$Bouquet7  -> addTypesService($this -> getReference('TypeService2'));
		
		$Bouquet8  -> addTypesService($this -> getReference('TypeService1'));
		$Bouquet8  -> addTypesService($this -> getReference('TypeService2'));
		$Bouquet8  -> addTypesService($this -> getReference('TypeService3'));
		
		$Bouquet9  -> addTypesService($this -> getReference('TypeService1'));
		$Bouquet9  -> addTypesService($this -> getReference('TypeService2'));
		$Bouquet9  -> addTypesService($this -> getReference('TypeService3'));
		$Bouquet9  -> addTypesService($this -> getReference('TypeService4'));
		
		$Bouquet10 -> addTypesService($this -> getReference('TypeService1'));
		$Bouquet10 -> addTypesService($this -> getReference('TypeService2'));
		$Bouquet10 -> addTypesService($this -> getReference('TypeService3'));
		$Bouquet10 -> addTypesService($this -> getReference('TypeService4'));
		$Bouquet10 -> addTypesService($this -> getReference('TypeService5'));
		$Bouquet10 -> addTypesService($this -> getReference('TypeService6'));

		$manager   -> persist($Bouquet1);
		$manager   -> persist($Bouquet2);
		$manager   -> persist($Bouquet3);
		$manager   -> persist($Bouquet4);
		$manager   -> persist($Bouquet5);
		$manager   -> persist($Bouquet6);
		$manager   -> persist($Bouquet7);
		$manager   -> persist($Bouquet8);
		$manager   -> persist($Bouquet9);
		$manager   -> persist($Bouquet10);

		$manager   -> flush();

		$this 	   -> addReference('Bouquet1', $Bouquet1);
		$this 	   -> addReference('Bouquet2', $Bouquet2);
		$this 	   -> addReference('Bouquet3', $Bouquet3);
		$this 	   -> addReference('Bouquet4', $Bouquet4);
		$this 	   -> addReference('Bouquet5', $Bouquet5);
		$this 	   -> addReference('Bouquet6', $Bouquet6);
		$this 	   -> addReference('Bouquet7', $Bouquet7);
		$this 	   -> addReference('Bouquet8', $Bouquet8);
		$this 	   -> addReference('Bouquet9', $Bouquet9);
		$this 	   -> addReference('Bouquet10', $Bouquet10);
		
	}

	public function getOrder()
	{
		return 8; 
	}

}