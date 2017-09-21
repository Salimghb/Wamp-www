<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Adresse;

class LoadAdresse extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        for ($i=1; $i <= 35; $i++) {
            $add = new Adresse();
            $add -> setNum(rand(1,1000));
            $add -> setRue($faker->streetName());
            $add -> setCodePostal(rand(10,950)*100);
            $add -> setVille($faker->city());
            $manager -> persist($add);
            $manager -> flush();
            $this -> addReference('Adresse'.$i, $add);
        }

    }

    public function getOrder()
    {
        return 3; 
    }

}