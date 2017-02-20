<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{

	public function indexAction()
	{
		$content = $this -> get('templating') -> render('SalimPlateformeBundle:Advert:index.html.twig', array('nom'=>'Ghbabra',
			'prenom'=>'Salim'));

		return new Response($content);

	}

}