<?php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\Salarie;
use ConciergerieBundle\Repository\TypeServiceRepository;

class LoadSalarie extends AbstractFixture implements OrderedFixtureInterface
{

  public function load(ObjectManager $manager)
  {

    $faker = \Faker\Factory::create('fr_FR');

    for ($i=1; $i <= 20; $i++) {
      $sal = new Salarie();
      $sal -> setUser($this -> getReference('USalarie'.$i));
      $sal -> setAdresse($this -> getReference('Adresse'.strval($i+15)));
      $intSexe = rand(0,1);
      if ($intSexe == 0) {
        //Sexe = Homme
        $sal -> setPrenom($faker->firstName('male'));
        $sal -> setNom($faker->lastName());
        $sal -> setSexe('h');
      }
      else
      {
        //Sexe = Femme
        $sal -> setPrenom($faker->firstName('female'));
        $sal -> setNom($faker->lastName());
        $sal -> setSexe('f');
      }
      $sal -> setTelephone(rand(600000000,799999999));
      $sal -> setDateNaissance($faker->dateTimeInInterval('-80 years', '+60 years'));
      $sal -> setEntreprise($this->getReference('Entreprise'.rand(1,5)));
      $sal
      -> getUser()
      -> setEmail(
        utf8_decode(
          str_replace(' ', '',
            strtolower(
              $this->cleanString(
                "".$sal->getPrenom().".".$sal->getNom()
                ).'@'.$faker->freeEmailDomain()
              )
            )
          )
        );

      $manager -> persist($sal);
      $manager -> flush();
      $this -> addReference('Salarie'.$i, $sal);
    }

  }

  public function getOrder()
  {
    return 7; 
  }

  function cleanString($text) {
    $utf8 = array(
      '/[áàâãªä]/u' =>   'a',
      '/[ÁÀÂÃÄ]/u'  =>   'A',
      '/[ÍÌÎÏ]/u'   =>   'I',
      '/[íìîï]/u'   =>   'i',
      '/[éèêë]/u'   =>   'e',
      '/[ÉÈÊË]/u'   =>   'E',
      '/[óòôõºö]/u' =>   'o',
      '/[ÓÒÔÕÖ]/u'  =>   'O',
      '/[úùûü]/u'   =>   'u',
      '/[ÚÙÛÜ]/u'   =>   'U',
      '/ç/'         =>   'c',
      '/Ç/'         =>   'C',
      '/ñ/'         =>   'n',
      '/Ñ/'         =>   'N',
      '/–/'         =>   '-',
      '/[’‘‹›‚]/u'  =>   ' ',
      '/[“”«»„]/u'  =>   ' ',
      '/ /'         =>   ' ',
      );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
  }


}