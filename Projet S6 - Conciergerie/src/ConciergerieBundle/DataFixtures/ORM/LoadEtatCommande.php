<?php

namespace ConciergerieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ConciergerieBundle\Entity\EtatCommande;

class LoadEtatCommande extends AbstractFixture implements OrderedFixtureInterface
{

  public function load(ObjectManager $manager)
  {

    $EtatCommande1 = new EtatCommande();
    $EtatCommande2 = new EtatCommande();
    $EtatCommande3 = new EtatCommande();
    $EtatCommande4 = new EtatCommande();
    $EtatCommande5 = new EtatCommande();

    $EtatCommande1 -> setLibelle('En attente de confirmation du prestataire');
    $EtatCommande2 -> setLibelle('En attente de règlement du salarié');
    $EtatCommande3 -> setLibelle('En attente de livraison du prestataire');
    $EtatCommande4 -> setLibelle('Commande validée et livrée mais non commentée');
    $EtatCommande5 -> setLibelle('Commande validée, livrée et commentée');

    $EtatsCommande = array(
      $EtatCommande1,
      $EtatCommande2,
      $EtatCommande3,
      $EtatCommande4,
      $EtatCommande5
      );

    foreach ($EtatsCommande as $etat) {

      $manager 
      -> persist($etat);

    }

    $manager -> flush();
    $i=1;

    foreach ($EtatsCommande as $etat) {

      $this -> addReference('EtatCommande'.strval($i), $etat);
      $i++;

    }

  }



  public function getOrder()
  {
    return 2; 
  }

  
  
}

