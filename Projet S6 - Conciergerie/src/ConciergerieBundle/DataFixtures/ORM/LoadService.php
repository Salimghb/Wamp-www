<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\Service;

class LoadService extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        for ($i=1; $i <= 30; $i++) {

            $intRandomService = rand(1, 100);
            $intRandomPresta  = rand(1, 10);
            $intRandomTS      = rand(1, 6);
            $serv = new Service();

            $serv -> setType($this -> getReference('TypeService'.$intRandomTS));

            $serv -> setLibelle($serv -> getType() -> getLibelle().$i);

            $serv -> setTarif((float)rand(10,50));

            $serv -> setPrestataire($this -> getReference('Prestataire'.$intRandomPresta));

            $manager -> persist($serv);

            $manager -> flush();

            $this -> addReference('Service'.$i, $serv);

        }

    }

    public function getOrder()
    {
        return 9; 
    }

}