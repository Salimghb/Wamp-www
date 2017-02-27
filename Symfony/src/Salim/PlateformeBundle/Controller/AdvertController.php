<?php

namespace Salim\PlateformeBundle\Controller;

use Salim\PlateformeBundle\Entity\Advert;
use Salim\PlateformeBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

	public function menuAction($limit)
	{

		$listAdverts = array(
			array('id' => 2,'title' => 'Recherche développeur Symfony'),
			array('id' => 5,'title' => 'Mission de webmaster'),
			array('id' => 9,'title' => 'Offre de stage webdesigner')
			);
		return $this->render('SalimPlateformeBundle:Advert:menu.html.twig',
			array(
				'listAdverts'=> $listAdverts
				)
			);

	}
	

	public function indexAction($page)
	{
		// On ne sait pas combien de pages il y a
    	// Mais on sait qu'une page doit être supérieure ou égale à 1
		if ($page < 1){
			throw new NotFoundHttpException ('Page \''.$page.'\' inexistante !');
		}
		$listAdverts = array(
			array(
				'title'   => 'Recherche développpeur Symfony',
				'id'      => 1,
				'author'  => 'Alexandre',
				'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Mission de webmaster',
				'id'      => 2,
				'author'  => 'Hugo',
				'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Offre de stage webdesigner',
				'id'      => 3,
				'author'  => 'Mathieu',
				'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
				'date'    => new \Datetime())
			);

		return $this->render('SalimPlateformeBundle:Advert:index.html.twig',
			array('listAdverts' => $listAdverts)
			);

	}


	public function viewAction($id)
	{

		// Etape 1 : On récupère le Repository
		$advertRepository = $this 	-> getDoctrine() 
										-> getManager() 
											-> getRepository('SalimPlateformeBundle:Advert');

		// Etape 2 : On récupère l'entité correspondante à l'id $id
		$advert = $advertRepository -> find($id); 

		// $advert est soit une instance de l'objet Advert
		// soit null si l'id ne correspond à aucune entité du repository
		
		// Etape 3 : On vérifie donc si on a bien récupéré l'entité
		
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas.");
		}

		// Etape 4 : On passe maintenant un objet au render
		return $this->render('SalimPlateformeBundle:Advert:view.html.twig',
			array('advert'=>$advert
				));

	}


	public function addAction(Request $request)
	{

		// On crée l'entité à ajouter
		$advert = new Advert();
		$advert-> setTitle('Salut Symfony');
		$advert-> setAuthor('Salim Ghbabra');
		$advert-> setContent('Nous recherchons un développeur Symfony débutant sur Orléans...');
		// Date et id définis automatiquement par le constructeur
		// Published est déjà défini à true
		
		// Création de l'entité Image
		$image = new Image();
		$image -> setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
		$image -> setAlt('Job de rêve');

		// On lie l'image à l'annonce
		$advert -> setImage($image);
		
		// On récupère l'Entity Manager (EM)
		$em = $this->getDoctrine()->getManager();

		// Etape 1 : On persiste l'entité 
		// Elle est maintenant gérée par Doctrine
		$em->persist($advert);

		// Etape 2 : On flush tout ce qui a été persisté avant 
		// Doctrine enregistre dans la base les entités persistées
		$em->flush();

		// Reste de la méthode qu'on avait déjà écrit
		if ($request->isMethod('POST')) {
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      	// Redirection vers la page de l'annonce ajoutée
			return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
		}

    	// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('SalimPlateformeBundle:Advert:add.html.twig', array('advert' => $advert));

	}



	public function editAction($id, Request $request)
	{

		if ($request->isMethod('POST')){

			$request->getSession()->getFlashBag()->add('notice','Annonce modifiée !');

			return $this->redirectToRoute('oc_platform_view',array('id'=>5));

		}

		$advert = array(
			'title'   => 'Recherche développpeur Symfony',
			'id'      => $id,
			'author'  => 'Alexandre',
			'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
			'date'    => new \Datetime()
			);

		return $this->render('SalimPlateformeBundle:Advert:edit.html.twig', 
			array('advert'=>$advert
				));

	}


	public function deleteAction($id)
	{

		return $this->render('SalimPlateformeBundle:Advert:delete.html.twig');

	}

}