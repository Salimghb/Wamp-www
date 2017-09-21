<?php

namespace ConciergerieBundle\Controller;

use ConciergerieBundle\Entity\Service;
use ConciergerieBundle\Entity\Commande;
use ConciergerieBundle\Entity\EtatCommande;
use ConciergerieBundle\Form\ServiceType;
use UserBundle\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PrestataireController extends Controller
{


	public function indexAction()
	{

		return $this -> render('ConciergerieBundle:Prestataire:index.html.twig');

	}



	public function addServiceAction(Request $request)
	{

		$service = new Service();

		$form= $this
		-> createForm(ServiceType::class,$service);

		$prestataire= $this
		-> getUser()
		-> getPrestataire();

		if ($request -> isMethod('POST') && $form -> handleRequest($request) -> isValid())
		{
			$service -> setPrestataire($prestataire);
			$prestataire -> addService($service);
			$service -> getType() -> addService($service);
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($service);
			$em -> flush();

			$request -> getSession() -> getFlashBag() -> add('notice', 'Votre service a bien été publié.');

			return $this -> redirectToRoute('conciergerie_ECPrestataire_listeServices');
		}

		return $this -> render('ConciergerieBundle:Prestataire:addService.html.twig',
			array(
				'form' => $form -> createView(),
				));

	}



	public function listeServicesAction()
	{

		$em = $this
		-> getDoctrine()
		-> getManager();

		$prestataire = $this
		-> getUser()
		-> getPrestataire();

		$listeServices = $em
		-> getRepository('ConciergerieBundle:Service')
		-> findby(
			array(
				'prestataire'=>$prestataire)
			);


		return $this -> render('ConciergerieBundle:Prestataire:listeService.html.twig',
			array(
				'listeServices' =>$listeServices,
				'nbcommandes' =>0,
				));

	}



	public function viewServiceAction($id, Request $request)
	{

		$em = $this
		-> getDoctrine()
		-> getManager();

		//On récupère le service à partir de l'id
		$service = $em
		-> getRepository('ConciergerieBundle:Service')
		-> find($id);

		if (null === $service) {
			throw new NotFoundHttpException("Le service d'id ".$id." n'existe pas.");
		}
		//On stock ce service dans un formulaire pour l'éditer
		$form= $this
		-> createForm(ServiceType::class,$service);

		if ($request -> isMethod('POST') && $form -> handleRequest($request) -> isValid())
		{
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($service);
			$em -> flush();

			$request -> getSession() -> getFlashBag() -> add('notice', 'Le service a bien été modifié.');

			return $this -> redirectToRoute('conciergerie_ECPrestataire_listeServices', array('id'=>$id));
		}


		return $this -> render('ConciergerieBundle:Prestataire:viewService.html.twig',
			array(
				'service'=>$service,
				'form'=>$form -> createView(),
				));

	}



	public function commandesServiceAction($id)
	{

		$em=$this
		-> getDoctrine()
		-> getManager();

		$service = $em
		-> getRepository('ConciergerieBundle:Service')
		-> find($id);

		$commandes = $service-> getCommandes();

		//On intègre les commandes dans un tableau selon leur état
		$commandesEnAttente = [];
		$commandesNonRegle = [];
		$commandesNonLivre = [];

		foreach ($commandes as $commande)
		{
			if ($commande -> getEtat() -> getId() == 1) {
				$commandesEnAttente[] = $commande;
			}
			elseif ($commande -> getEtat() -> getId() == 2) {
				$commandesNonRegle[] = $commande;
			}
			elseif ($commande -> getEtat() -> getId() == 3) {
				$commandesNonLivre[] = $commande;
			}
		}


		return $this -> render('ConciergerieBundle:Prestataire:commandesService.html.twig',
			array(
				'service'=> $service,
				'commandesEnAttente'=>$commandesEnAttente,
				'commandesNonRegle'=>$commandesNonRegle,
				'commandesNonLivre'=>$commandesNonLivre,
				));

	}

	public function validerCommandeAction($id)
	{

		$em = $this
		->getDoctrine()
		->getManager();

				//On récupère la commande dont l'ID a été passé en paramètre
		$commande = $em
		->getRepository('ConciergerieBundle:Commande')
		->find($id);

				//On récupère l'objet 'Etat' correspondant à une commande validée par le prestataire
		$etatValide = $em
		->getRepository('ConciergerieBundle:EtatCommande')
		->find(2);

				//On change l'état de cette commande et on valide les changements en bdd
		$commande->setEtat($etatValide);
		$em->persist($commande);
		$em->flush();

				//On récupère l'id du service de cette commande pour la redirection
		$idService = $commande->getService()->getId();

				//Une fois les changements d'état fait en BDD on peut rediriger vers la page de suivi de commande
		return $this -> redirectToRoute('conciergerie_ECPrestataire_commandes', array('id'=>$idService));

	}



	public function monCompteAction(Request $request)
	{

		//On récupère l'utilisateur courant
		$user = $this -> getUser();

		//On stock cet utilisateur dans un formulaire pour l'éditer
		$editForm = $this
		-> createForm(RegistrationType::class, $user,
			array('label'=>'Prestataire'));

		if ($request -> isMethod('POST') && $editForm -> handleRequest($request) -> isValid())
		{
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($user);
			$em -> flush();

			$request -> getSession() -> getFlashBag() -> add('notice', 'Le compte a bien été modifié.');

			return $this -> redirectToRoute('conciergerie_ECPrestataire_monCompte');
		}

		return $this -> render('ConciergerieBundle:Prestataire:monCompte.html.twig',
			array(
				'form'=>$editForm -> createView(),
				));

	}

	public function historiqueAction()
	{

		$em = $this
		-> getDoctrine()
		-> getManager();

		$prestataire = $this
		-> getUser()
		-> getPrestataire();

		//liste des commandes validées (dont l'état est de 4 ou 5)
		$commandesValide = $em
		-> getRepository('ConciergerieBundle:Commande')
		-> getCommandesValide();

		//On cherche la liste des commandes validées pour ce prestataire
		$CommandesValidePresta = [];
		foreach ($commandesValide as $commande)
		{
			if ($commande->getService()->getPrestataire() == $prestataire)
			{
				$CommandesValidePresta[]= $commande;
			}
		}

		return $this -> render('ConciergerieBundle:Prestataire:historique.html.twig',
			array(
				'CommandesValidePresta' =>$CommandesValidePresta,
				));

	}

	public function commentairesServiceAction(Service $service)
	{

		$commentaires = $service->getCommentaires();

		return $this->render('ConciergerieBundle:Prestataire:commentairesService.html.twig',
			array(
				'commentaires' => $commentaires,
				'service' => $service,
				));

	}


}
