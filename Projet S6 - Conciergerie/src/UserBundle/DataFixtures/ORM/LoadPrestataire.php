<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Prestataire;
use ConciergerieBundle\Repository\TypeServiceRepository;

class LoadPrestataire extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        for ($i=1; $i < 11; $i++) {
            $presta = new Prestataire();
            $presta -> setSiret(rand(1000000000,99999999999));
            $presta -> setUser($this -> getReference('UPrestataire'.$i));
            $presta -> setAdresse($this -> getReference('Adresse'.strval($i+5)));
            $presta -> setResponsable(
                $faker->firstName(null)." ".
                $faker->lastName()
                );
            $presta -> setTelephone(rand(100000000,799999999));
            $presta -> setSite($faker->domainName());
            $presta -> getUser() -> setEmail(strtolower($presta->getUser()->getUsername()).'@'.$faker->freeEmailDomain());

            $manager -> persist($presta);
            $manager -> flush();
            $this -> addReference('Prestataire'.$i, $presta);
        }

    }

    public function getOrder()
    {
        return 5; 
    }

}