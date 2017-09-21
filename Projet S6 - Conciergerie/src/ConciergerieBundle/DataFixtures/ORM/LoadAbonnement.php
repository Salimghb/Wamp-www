<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\Abonnement;

class LoadAbonnement extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

/*
        $Abonnement1  = new Abonnement();
        $Abonnement2  = new Abonnement();
        $Abonnement3  = new Abonnement();
        $Abonnement4  = new Abonnement();
        $Abonnement5  = new Abonnement();
        $Abonnement6  = new Abonnement();
        $Abonnement7  = new Abonnement();
        $Abonnement8  = new Abonnement();
        $Abonnement9  = new Abonnement();
        $Abonnement10 = new Abonnement();
        $Abonnement11 = new Abonnement();
        $Abonnement12 = new Abonnement();
        
        $Abonnement1  -> setDureeAbo(8);
        $Abonnement2  -> setDureeAbo(18);
        $Abonnement3  -> setDureeAbo(3);
        $Abonnement4  -> setDureeAbo(15);
        $Abonnement5  -> setDureeAbo(7);
        $Abonnement6  -> setDureeAbo(2);
        $Abonnement7  -> setDureeAbo(4);
        $Abonnement8  -> setDureeAbo(5);
        $Abonnement9  -> setDureeAbo(9);
        $Abonnement10 -> setDureeAbo(8);
        $Abonnement11 -> setDureeAbo(7);
        $Abonnement12 -> setDureeAbo(6);

        $Abonnement1  -> setDateDebut(new \DateTime('now'));
        $Abonnement2  -> setDateDebut(new \DateTime('now'));
        $Abonnement3  -> setDateDebut(new \DateTime('now'));
        $Abonnement4  -> setDateDebut(new \DateTime('now'));
        $Abonnement5  -> setDateDebut(new \DateTime('now'));
        $Abonnement6  -> setDateDebut(new \DateTime('now'));
        $Abonnement7  -> setDateDebut(new \DateTime('now'));
        $Abonnement8  -> setDateDebut(new \DateTime('now'));
        $Abonnement9  -> setDateDebut(new \DateTime('now'));
        $Abonnement10 -> setDateDebut(new \DateTime('now'));
        $Abonnement11 -> setDateDebut(new \DateTime('now'));
        $Abonnement12 -> setDateDebut(new \DateTime('now'));

        $Abonnement1  -> setEntreprise($this -> getReference('Entreprise1'));
        $Abonnement2  -> setEntreprise($this -> getReference('Entreprise1'));
        $Abonnement3  -> setEntreprise($this -> getReference('Entreprise1'));
        $Abonnement4  -> setEntreprise($this -> getReference('Entreprise1'));
        $Abonnement5  -> setEntreprise($this -> getReference('Entreprise1'));
        $Abonnement6  -> setEntreprise($this -> getReference('Entreprise2'));
        $Abonnement7  -> setEntreprise($this -> getReference('Entreprise2'));
        $Abonnement8  -> setEntreprise($this -> getReference('Entreprise3'));
        $Abonnement9  -> setEntreprise($this -> getReference('Entreprise3'));
        $Abonnement10 -> setEntreprise($this -> getReference('Entreprise4'));
        $Abonnement11 -> setEntreprise($this -> getReference('Entreprise5'));
        $Abonnement12 -> setEntreprise($this -> getReference('Entreprise5'));

        $Abonnement1  -> setBouquet($this -> getReference('Bouquet1'));
        $Abonnement2  -> setBouquet($this -> getReference('Bouquet2'));
        $Abonnement3  -> setBouquet($this -> getReference('Bouquet3'));
        $Abonnement4  -> setBouquet($this -> getReference('Bouquet4'));
        $Abonnement5  -> setBouquet($this -> getReference('Bouquet6'));
        $Abonnement6  -> setBouquet($this -> getReference('Bouquet5'));
        $Abonnement7  -> setBouquet($this -> getReference('Bouquet7'));
        $Abonnement8  -> setBouquet($this -> getReference('Bouquet6'));
        $Abonnement9  -> setBouquet($this -> getReference('Bouquet8'));
        $Abonnement10 -> setBouquet($this -> getReference('Bouquet10'));
        $Abonnement11 -> setBouquet($this -> getReference('Bouquet2'));
        $Abonnement12 -> setBouquet($this -> getReference('Bouquet4'));

        
        
        $Abonnements = array(
          $Abonnement1 ,
          $Abonnement2 ,
          $Abonnement3 ,
          $Abonnement4 ,
          $Abonnement5 ,
          $Abonnement6 ,
          $Abonnement7 ,
          $Abonnement8 ,
          $Abonnement9 ,
          $Abonnement10,
          $Abonnement11,
          $Abonnement12
          );

        
        $i=1;
        foreach ($Abonnements as $abo) {

            $manager -> persist($abo);

            $manager -> flush();

            $this -> addReference('Abonnement'.strval($i), $abo);

            $i++;

        }*/

    }

    public function getOrder()
    {
        return 11; 
    }

}