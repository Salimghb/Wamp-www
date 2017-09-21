<?php

namespace ConciergerieBundle\Controller;

use UserBundle\Entity\Salarie;
use ConciergerieBundle\Entity\Commentaire;
use ConciergerieBundle\Entity\Commande;
use ConciergerieBundle\Form\CommentaireType;
use UserBundle\Form\RegistrationType;
use ConciergerieBundle\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class SalarieController extends Controller
{

  public function indexAction()
  {

    $em = $this
    ->getDoctrine()
    ->getManager();

      //récupération du salarié courant
    $salarie = $this
    ->getUser()
    ->getSalarie();

      /*Si l'entreprise a une entreprise on execute ce morceau de code
      pour filtrer l'affichage des services
      */
      if (is_null($salarie->getEntreprise()) == false) {

        //Abonnements auxquels est abonnée l'entreprise du salarié
        $abonnements = $salarie->getEntreprise()->getAbonnements();

        //On stock tous les types de chaque bouquet dans un tableau global
        $TypesService = [];

        foreach ($abonnements as $abonnement) {
          foreach ($abonnement->getBouquet()->getTypesService() as $type) {
            $TypesService[] = $type;
          }
        }

        //On récupère l'ensemble des services disponibles sur le site
        $listeServices = $em
        -> getRepository('ConciergerieBundle:Service')
        -> findBy(
            array(),                // Pas de filtre
            array('libelle'=>'asc')     // On trie par libelle croissant
            );

          //On affiche uniquement les services dont type est compris dans $TypeService
        $servicesDispo = [];
        foreach ($listeServices as $service) {
          if (in_array($service->getType(),$TypesService)) {
            $servicesDispo[] = $service;
          }
        }
      }else {

      /* Si l'utilisateur n'a effectivement pas d'entreprise on a rien à afficher,
      On lui fixe donc le tableau listeServices vide pour gérer l'affichage dans la vue
      */
      
      $servicesDispo = [];
    }


    return $this->render('ConciergerieBundle:Salarie:index.html.twig',
      array(
        'listeServices'=>$servicesDispo,
        ));

  }

  //Récapitulatif du service et la commande avant confirmation
  public function CommandeServiceAction(Service $service)
  {

    return $this->render('ConciergerieBundle:Salarie:commandeService.html.twig',
      array(
        'service'=>$service,
        ));

  }


  public function viewServiceAction(Service $service, Request $request)
  {
    //On récupère le salarié connecté
    $salarie = $this
    ->getUser()
    ->getSalarie();

    //On récupère la liste des commandes du salarié
    $commandes = $salarie->getCommandes();

    //liste des commandes du salarie dont l'état est "En attente d'avis"
    $commandesNonCommente = [];
    //On ne va boucler sur les commandes
    //que si il y en a dans le tableau du salarié
    if (is_null($commandes)==false) {

    }
    foreach ($commandes as $commande) {
      if ($commande->getEtat()->getId() == 4) {
        $commandesNonCommente[] = $commande;
      }
    }

    return $this->render('ConciergerieBundle:Salarie:viewService.html.twig',
      array(
        'service'=>$service,
        ));

  }


  public function ConfirmCommandeServiceAction(Service $service, Request $request)
  {

    $salarie = $this
    ->getUser()
    ->getSalarie();

    $em = $this
    ->getDoctrine()
    ->getManager();

    $commande = new Commande();

      //on récupère l'objet Etat correspondant à "En attente de confirmation Prestataire"
    $etatEnAttente = $em
    ->getRepository('ConciergerieBundle:EtatCommande')
    ->find(1);

    $commande->setComplements($request->request->get('complements'));
    $commande->setEtat($etatEnAttente);
    $commande->setSalarie($salarie);
    $commande->setService($service);

    $em->persist($commande);
    $em->flush();

    return $this -> redirectToRoute('conciergerie_ECSalarie');

  }


  public function listeCommandesAction()
  {

    //on récupère le salarié connecté
    $salarie = $this->getUser()->getSalarie();

    //On récupère les commandes du salarié
    $commandes = $salarie->getCommandes();

    //On va placer les commandes dans des tableaux correspondant à leurs états respectifs
    $commandesNonValide = []; //Commandes dont l'état est 1
    $commandesNonRegle = []; //Commandes dont l'état est 2
    $commandesNonLivre = []; //Commandes dont l'état est 3
    $commandesNonCommente = []; //Commandes dont l'état est 4
    $commandesValide = []; //Commandes dont l'état est 5

    foreach ($commandes as $commande )
    {
      if ($commande->getEtat()->getId() == 1)
      {
        $commandesNonValide[] = $commande;
      }
      elseif ($commande->getEtat()->getId() == 2)
      {
        $commandesNonRegle[] = $commande;
      }
      elseif ($commande->getEtat()->getId() == 3)
      {
        $commandesNonLivre[] = $commande;
      }
      elseif ($commande->getEtat()->getId() == 4)
      {
        $commandesNonCommente[] = $commande;
      }
      elseif ($commande->getEtat()->getId() == 5)
      {
        $commandesValide[] = $commande;
      }
    }

    return $this->render('ConciergerieBundle:Salarie:listeCommandes.html.twig',
      array(
        'commandesNonValide'=>$commandesNonValide,
        'commandesNonRegle'=>$commandesNonRegle,
        'commandesNonLivre'=>$commandesNonLivre,
        'commandesNonCommente'=>$commandesNonCommente,
        'commandesValide'=>$commandesValide,
        ));

  }


  public function commandePayAction(Commande $commande)
  {

    $service = $commande->getService();

    return $this->render('ConciergerieBundle:Salarie:commandePay.html.twig',
      array(
        'service'=>$service,
        'commande'=>$commande,
        ));

  }

  //Ce controleur gère la validation du règlement de la commande
  public function confirmPayAction(Commande $commande, Request $request)
  {

    $em = $this
    ->getDoctrine()
    ->getManager();

      //On récupère l'objet 'Etat' correspondant à une commande réglée par le salarié
    $etatRegle = $em
    ->getRepository('ConciergerieBundle:EtatCommande')
    ->find(3);

      //On change l'état de la commande, celle-ci est maintenant payée
    $commande
    ->setPayed(true)
    ->setEtat($etatRegle);

    $em->persist($commande);
    $em->flush();

    $request -> getSession() -> getFlashBag() -> add('notice', 'Votre commande a bien été réglée par '.$request->request->get('modePaiement'));

    return $this -> redirectToRoute('conciergerie_ECSalarie_listeCommandes');

  }

  //Ce controleur gère la validation de la livraison de la commande
  public function confirmLivraisonAction(Commande $commande, Request $request)
  {

    $em = $this
    ->getDoctrine()
    ->getManager();

      //On récupère l'objet 'Etat' correspondant à une prestation délivrée
    $etatLivre = $em
    ->getRepository('ConciergerieBundle:EtatCommande')
    ->find(4);

      //On change l'état de la commande, celle-ci est maintenant payée
    $commande->setEtat($etatLivre);

    $em->persist($commande);
    $em->flush();

    $request -> getSession() -> getFlashBag() -> add('notice', 'Le service de la commande n°'.$commande->getId().' a bien été délivré.');

    return $this -> redirectToRoute('conciergerie_ECSalarie_listeCommandes');

  }

  //controleur permettant poster un commentaire pour le service
  public function commenterServiceAction(Commande $commande, Request $request)
  {

    $salarie = $this->getUser()->getSalarie();
    $service = $commande->getService();

      //Bloc relatif a la publication du commentaire
    $commentaire = new Commentaire();

    $form= $this
    -> createForm(CommentaireType::class,$commentaire);

    if ($request -> isMethod('POST') && $form -> handleRequest($request) -> isValid())
    {
        //on définit les différents attributs du commentaire et ses relations
      $commentaire -> setSalarie($salarie);
      $commentaire -> setService($service);
        //on récupère l'état 5 (commande commentée)
      $em = $this -> getDoctrine() -> getManager();
      $etatValide = $em
      ->getRepository('ConciergerieBundle:EtatCommande')
      ->find(5);
        //On attribue cet état à la commande courante
      $commande->setEtat($etatValide);
        //on valide l'ensemble en bdd (persist + flush)
      $em -> persist($commentaire);
      $em -> flush();

      $request -> getSession() -> getFlashBag() -> add('notice', 'Commentaire ajouté.');

      return $this -> redirectToRoute('conciergerie_ECSalarie_service',array('id'=>$service->getId()));
    }

    return $this->render('ConciergerieBundle:Salarie:commenterService.html.twig',
      array(
        'service'=>$service,
        'form'=>$form->createView(),
        'commande'=>$commande,
        ));

  }


  public function monEntrepriseAction()
  {

    $salarie = $this
    ->getUser()
    ->getSalarie();

    return $this->render('ConciergerieBundle:Salarie:monEntreprise.html.twig',
      array(
        'salarie'=>$salarie,
        ));

  }


  public function monCompteAction(Request $request)
  {

    //On récupère l'utilisateur courant
    $user = $this -> getUser();

    //On stock cet utilisateur dans un formulaire pour l'éditer
    $editForm = $this
    -> createForm(RegistrationType::class, $user,
      array('label'=>'Salarie'));

    if ($request -> isMethod('POST') && $editForm -> handleRequest($request) -> isValid())
    {
      $em = $this -> getDoctrine() -> getManager();
      $em -> persist($user);
      $em -> flush();

      $request -> getSession() -> getFlashBag() -> add('notice', 'Le compte a bien été modifié.');

      return $this -> redirectToRoute('conciergerie_ECSalarie_monCompte');
    }

    return $this->render('ConciergerieBundle:Salarie:monCompte.html.twig',
      array(
        'form'=>$editForm->createView(),
        ));

  }

}
