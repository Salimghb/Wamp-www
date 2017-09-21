<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Entreprise;
use ConciergerieBundle\Repository\TypeServiceRepository;

class LoadEntreprise extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('fr_FR');

        for ($i=1; $i <= 5; $i++) {
            $ent = new Entreprise();
            $ent -> setSiret(rand(1000000000, 9999999999));
            $ent -> setUser($this -> getReference('UEntreprise'.$i));
            $ent -> setAdresse($this -> getReference('Adresse'.strval($i)));
            $ent -> setResponsable(
                $faker->firstName(null)." ".
                $faker->lastName()
                );
            $ent -> setTelephone(rand(100000000,799999999));
            $ent -> setSite($faker->domainName());
            $ent -> getUser() -> setEmail(strtolower($ent->getUser()->getUsername()).'@'.$faker->freeEmailDomain());

            $manager -> persist($ent);
            $manager -> flush();
            $this -> addReference('Entreprise'.$i, $ent);
        }
    }

    public function getOrder()
    {
        return 6; 
    }

}