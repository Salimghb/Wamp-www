<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\TypeService;

class LoadTypeService extends AbstractFixture implements OrderedFixtureInterface
{

  public function load(ObjectManager $manager)
  {

    $TypeService1 = new TypeService();
    $TypeService2 = new TypeService();
    $TypeService3 = new TypeService();
    $TypeService4 = new TypeService();
    $TypeService5 = new TypeService();
    $TypeService6 = new TypeService();

    $TypeService1 -> setLibelle('Livraison');
    $TypeService2 -> setLibelle('Coiffure');
    $TypeService3 -> setLibelle('Soins du corps');
    $TypeService4 -> setLibelle('Aide à domicile');
    $TypeService5 -> setLibelle('Entretien Maison');
    $TypeService6 -> setLibelle('Gardiennage');

    $TypesService = array(
      $TypeService1,
      $TypeService2,
      $TypeService3,
      $TypeService4,
      $TypeService5,
      $TypeService6);


    foreach ($TypesService as $type) {

      $manager -> persist($type);

    }

    $manager -> flush();
    $i=1;

    foreach ($TypesService as $type) {

      $this -> addReference('TypeService'.strval($i), $type);
      $i++;

    }

  }

  public function getOrder()
  {
    return 1; 
  }
  
}
