<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\Commande;

class LoadCommande extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        for ($i=1; $i <= 60; $i++) {

            $commande = new Commande();

            $commande -> setDate($faker->dateTimeInInterval('10 days', '+9 days'));

            $commande -> setService($this->getReference('Service'.rand(1,30)));

            $commande -> setSalarie($this->getReference('Salarie'.rand(1,20)));

            $intRandQuart = rand(1,4);

            if ($intRandQuart == 1)
            {
                $commande -> setEtat($this->getReference('EtatCommande1'));
                $commande -> setPayed(false);
            }
            elseif ($intRandQuart == 2)
            {
                $commande -> setEtat($this->getReference('EtatCommande2'));
                $commande -> setPayed(false);
            }
            elseif ($intRandQuart == 3)
            {
                $commande -> setEtat($this->getReference('EtatCommande3'));
                $commande -> setPayed(true);
            }
            else
            {
                $commande -> setEtat($this->getReference('EtatCommande4'));
                $commande -> setPayed(true);
            }

            $manager -> persist($commande);

            $manager -> flush();

            $this -> addReference('Commande'.$i, $commande);
            
        }

    }

    public function getOrder()
    {
        return 10; 
    }

}