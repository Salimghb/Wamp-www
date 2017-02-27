<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Salim\PlateformeBundle\Entity\Advert;
use Salim\PlateformeBundle\Entity\Image;
use Salim\PlateformeBundle\Entity\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

	public function menuAction($limit)
	{

		$listAdverts = array(
			array('id' => 6,'title' => 'Recherche développeur Symfony'),
			array('id' => 6,'title' => 'Mission de webmaster'),
			array('id' => 6,'title' => 'Offre de stage webdesigner')
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
				'title'   => 'Recherche développeur Symfony',
				'id'      => 6,
				'author'  => 'Alexandre',
				'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Mission de webmaster',
				'id'      => 6,
				'author'  => 'Hugo',
				'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
				'date'    => new \Datetime()),
			array(
				'title'   => 'Offre de stage webdesigner',
				'id'      => 6,
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

		// Etape 1 : On récupère l'entité correspondante à l'id $id
		$advert = $this 
		-> getDoctrine() 
		-> getManager() 
		-> getRepository('SalimPlateformeBundle:Advert') 
		-> find($id); 

		// $advert est soit une instance de l'objet Advert
		// soit null si l'id ne correspond à aucune entité du repository
		
		// Etape 2 : On vérifie donc si on a bien récupéré l'entité
		
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas.");
		}

		// Etape 3 : On récupère la liste des candidatures de cette annonce
		
		$em = $this -> getDoctrine() -> getManager();

		$listApplications = $em
		-> getRepository('SalimPlateformeBundle:Application')
		-> findBy(array('advert'=>$advert));

		// Etape 4 : On passe maintenant une annonce 
		// Et sa liste de candidatures au render
		return $this->render('SalimPlateformeBundle:Advert:view.html.twig',
			array(
				'advert'=>$advert,
				'listApplications'=>$listApplications
				));

	}


	public function addAction(Request $request)
	{

		// On crée l'entité à ajouter
		$advert = new Advert();
		$advert -> setTitle('Recherche développeur Symfony');
		$advert -> setAuthor('Salim Ghbabra');
		$advert -> setContent('Nous recherchons un développeur Symfony débutant sur Orléans...');
		// Date et id définis automatiquement par le constructeur
		// Published est déjà défini à true
		
		// On crée les candidatures
		$application1 = new Application();
		$application1->setAuthor('Marine');
		$application1->setContent("J'ai toutes les qualités requises.");

		$application2 = new Application();
		$application2->setAuthor('Pierre');
		$application2->setContent("Je suis très motivé.");
		
		// On lie les candidatures à l'annonce
		$application1->setAdvert($advert);
		$application2->setAdvert($advert);

		// On récupère l'Entity Manager (EM)
		$em = $this->getDoctrine()->getManager();

		// Etape 1 : On persiste l'entité 
		// Elle est maintenant gérée par Doctrine
		$em -> persist($advert);

		// Etape 1 bis : Aucune cascade n'est définie car 
		// La relation est définie dans l'entité Applciation, 
		// L'entité Advert ne sait pas qu'elle est liée à deux Application. 
		// On doit tout persister à la main dans ce cas
		$em -> persist($application1);
		$em -> persist($application2);


		// Etape 2 : On flush tout ce qui a été persisté avant 
		// Doctrine enregistre dans la base les entités persistées
		$em -> flush();

		// Reste de la méthode qu'on avait déjà écrit
		if ($request->isMethod('POST')) {
			$request 
			-> getSession() 
			-> getFlashBag() 
			-> add('notice', 'Annonce bien enregistrée.');

      	// Redirection vers la page de l'annonce ajoutée
			return $this -> redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
		}

    	// Si on n'est pas en POST, alors on affiche le formulaire
		return $this -> render('SalimPlateformeBundle:Advert:add.html.twig', array('advert' => $advert));

	}



	public function editAction($id, Request $request)
	{

		$em = $this 
		-> getDoctrine()
		-> getManager();

		//On récupère l'annonce correspondante à $id
		$advert = $em
		-> getRepository('SalimPlateformeBundle:Advert')
		-> find($id);

		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas");
		}

		//On récupère toutes les catégories de la base (findAll)
		$listCategories = $em
		-> getRepository('SalimPlateformeBundle:Category')
		-> findAll();

		//On lie les catégories à l'annonce
		foreach ($listCategories as $category) {
			$advert -> addCategory($category);
		}

		//On envoie à la base
		$em -> flush();

		if ($request->isMethod('POST')){

			$request->getSession()->getFlashBag()->add('notice','Annonce modifiée !');

			return $this->redirectToRoute('oc_platform_view',array('id'=>5));

		}

		$advert = array(
			'title'   => 'Recherche développeur Symfony',
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
		$em = $this 
		-> getDoctrine()
		-> getManager();

		//On récupère l'annonce correspondante à $id
		$advert = $em
		-> getRepository('SalimPlateformeBundle:Advert')
		-> find($id);

		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce ".$id." n'existe pas");
		}

		//On boucle sur les catégories de l'annonce et on les supprime
		foreach ($advert->getCategories() as $category) {
			$advert -> removeCategory($category);
		}

		//On envoie à la base
		$em -> flush();

		return $this->render('SalimPlateformeBundle:Advert:delete.html.twig');

	}

	public function editImageAction($advertId)
	{

		// On récupère l'annonce
		$advert = $this 
		-> getDoctrine() 
		-> getManager() 
		-> getRepository('SalimPlateformeBundle:Advert') 
		-> find($advertId);

		// On met à jour l'url de l'image liée à l'annonce
		$advert->getImage()->setUrl('test.png');

		// On met à jour la base
		$em->flush();

		//On retourne une réponse (obligatoire)
		return new Response('OK');

	}

}
