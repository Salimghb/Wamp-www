<?php

namespace ConciergerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfflineController extends Controller
{
  public function indexAction()
  {
    return $this->render('ConciergerieBundle:Offline:index.html.twig');
  }

  public function preregisterAction()
  {
    return $this->render('ConciergerieBundle:Offline:preregister.html.twig');
  }

  public function affichageServicesAction()
  {
    return $this->render('ConciergerieBundle:Offline:services.html.twig');
  }

  public function infosConciergerieAction()
  {
    return $this->render('ConciergerieBundle:Offline:presentation.html.twig');
  }

  public function contactAction()
  {
    return $this->render('ConciergerieBundle:Offline:contact.html.twig');
  }

  public function redirectorAction()
  {

    if ($this->isGranted('ROLE_PRESTATAIRE'))
    {
      return $this->redirectToRoute('conciergerie_ECPrestataire');
    }
    elseif ($this->isGranted('ROLE_ENTREPRISE'))
    {
      return $this->redirectToRoute('conciergerie_ECEntreprise');
    }
    elseif ($this->isGranted('ROLE_SALARIE'))
    {
      return $this->redirectToRoute('conciergerie_ECSalarie');
    }
    elseif ($this->isGranted('ROLE_ADMIN'))
    {
      return $this->redirectToRoute('conciergerie_admin');
    }
    else
    {
      return $this->redirectToRoute('conciergerie_homepage');
    }
  }
}
