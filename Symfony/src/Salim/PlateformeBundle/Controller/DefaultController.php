<?php

namespace Salim\PlateformeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SalimPlateformeBundle:Default:index.html.twig');
    }
}
