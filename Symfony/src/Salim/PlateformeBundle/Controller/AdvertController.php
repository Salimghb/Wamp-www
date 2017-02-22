<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{

	public function indexAction()
	{
		$content = $this -> get('templating') -> render(

			'SalimPlateformeBundle:Advert:index.html.twig',
			array('nom'=>'Ghbabra',
				'prenom'=>'Salim'));

		return new Response($content);

	}


	public function viewAction($id)
	{

		return new Response ("Affichage de l'annonce de l'id : ".$id);

	}

	public function viewSlugAction($slug,$year,$format)
	{

		return new Response (
			"Affichage de l'annonce correspondante au slug '".$slug.
			"', créée en ".$year." au format ".$format.".");

	}

	public function indexByeAction()
	{
		$contentBye = $this->get('templating') -> render (

			'SalimPlateformeBundle:Advert:indexBye.html.twig', 
			array('nom'=>'Ghbabra',
				'prenom'=>'Salim'));

		return new Response($contentBye);

	}

}