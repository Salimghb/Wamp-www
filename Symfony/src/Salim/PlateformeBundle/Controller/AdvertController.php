<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{


	public function indexAction($page)
	{
		// On ne sait pas combien de pages il y a
    	// Mais on sait qu'une page doit être supérieure ou égale à 1
		if ($page < 1){
			throw new NotFoundHttpException ('Page \''.$page.'\' inexistante !');
		}

		return $this->render('SalimPlateformeBundle:Advert:index.html.twig');

	}


	public function viewAction($id)
	{
		return $this->render('SalimPlateformeBundle:Advert:view.html.twig',
			array('id'=>$id));
	}


	public function addAction(Request $request)
	{
		if ($request->isMethod('POST')){

			$request->getSession()->getFlashBag->add('notice','Annonce enregistrée !');

			return $this->redirectToRoute ('oc_platform_view', array('id'=>5));
		}

		return $this->render('SalimPlateformeBundle:Advert:add.html.twig');
	}


	public function editAction($id, Request $request)
	{

		if ($request->isMethod('POST')){

			$request->getSession()->getFlashBag()->add('notice','Annonce modifiée !');

			return $this->redirectToRoute('oc_platform_view',array('id'=>5));

		}

		return $this->render('SalimPlateformeBundle:Advert:edit.html.twig');

	}


	public function deleteAction($id)
	{

		return $this->render('SalimPlateformeBundle:Advert:delete.html.twig');

	}









}