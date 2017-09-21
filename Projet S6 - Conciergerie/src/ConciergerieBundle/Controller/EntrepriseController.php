<?php

namespace ConciergerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use UserBundle\Entity\Entreprise;
use UserBundle\Entity\Salarie;
use UserBundle\Form\EntrepriseType;
use UserBundle\Form\SalarieType;
use UserBundle\Form\RegistrationType;
use ConciergerieBundle\Entity\Abonnement;
use ConciergerieBundle\Form\AbonnementType;
use ConciergerieBundle\Form\BouquetType;


class EntrepriseController extends Controller
{

    public function indexAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listePropositions = $em
        -> getRepository('ConciergerieBundle:Bouquet')
        -> findBy(
            array(),                // Pas de filtre
            array('id'=>'asc'),     // On trie par id croissant
            10,                     // On sélectionne 10 bouquets
            0                       // A partir du premier
            );

        return $this -> render('ConciergerieBundle:Entreprise:index.html.twig',
            array('listePropositions' => $listePropositions));

    }



// GESTION ABONNEMENTS

    public function viewAboAction($id)
    {
        $user = $this
        -> getUser()
        -> getEntreprise();

        $em = $this
        -> getDoctrine()
        -> getManager();

        $abonnement = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> find($id);

        if ($abonnement === null) {
            throw new NotFoundHttpException("Cet abonnement n'existe pas.");
        }

        if ($abonnement-> getEntreprise() != $user) {
            throw new NotFoundHttpException("Cet abonnement ne vous appartient pas.");
        }

        $bouquet = $abonnement -> getBouquet();

        return $this -> render('ConciergerieBundle:Entreprise:viewAbo.html.twig',
            array(
                'abonnement' => $abonnement,
                'bouquet'    => $bouquet
                ));

    }



    public function addAboAction(Request $request)
    {
        $user = $this
        -> getUser()
        -> getEntreprise();
        
        $abonnement = new Abonnement();

        $form = $this
        -> get('form.factory')
        -> create(AbonnementType::class, $abonnement);

        if ($request-> isMethod('POST') && $form-> handleRequest($request)->isValid()) {

            foreach ($user->getAbonnements() as $AboEntreprise) {

                if (( $AboEntreprise->getBouquet()->getId() == $abonnement->getBouquet()->getId()))
                {
                    $request
                    -> getSession()
                    -> getFlashBag()
                    -> add('BlockAboSupp', 'Votre entreprise est déjà abonnée à ce bouquet !');

                    return $this
                    ->  render('ConciergerieBundle:Entreprise:addAbo.html.twig',
                        array(
                            'form' => $form-> createView(),
                            )
                        );
                }

            }

            $abonnement
            -> setDateFin(clone ($abonnement -> getDateDebut()));

            $abonnement
            -> getDateFin()
            -> add(new \DateInterval('P'.$abonnement -> getDureeAbo().'M'));

            $abonnement
            -> setBouquet($abonnement -> getBouquet());

            $abonnement 
            -> setEntreprise($user);

            $user
            -> addAbonnement($abonnement);

            $em = $this
            -> getDoctrine()
            -> getManager();

            $em
            -> persist($abonnement);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('AbonnementAjout', 'Votre abonnement a bien été pris en compte !');

            return $this
            -> redirectToRoute('conciergerie_ECEntreprise_viewAbo', array('id' => $abonnement-> getId()));
        }

        return $this
        ->  render('ConciergerieBundle:Entreprise:addAbo.html.twig',
            array(
                'form' => $form -> createView(),
                )
            );

    }



    public function deleteAboAction(Request $request, $id)
    {

        $user = $this
        -> getUser()
        -> getEntreprise();

        $em = $this
        -> getDoctrine()
        -> getManager();

        $abonnement = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> find($id);

        if ($abonnement === null) {
            throw new NotFoundHttpException("L'abonnement ".$id." n'existe pas");
        }

        if ($abonnement-> getEntreprise() != $user) {
            throw new NotFoundHttpException("Cet abonnement ne vous appartient pas.");
        }

        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $em
            -> remove($abonnement);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('AbonnementDelete', "Abonnement annulé!");

            return $this
            -> redirectToRoute('conciergerie_ECEntreprise_listeAbo');

        }

        return $this
        -> render('ConciergerieBundle:Entreprise:deleteAbo.html.twig',
            array(
                'abonnement' => $abonnement,
                'form'       => $form -> createView()
                ));

    }



    public function listeAboAction()
    {

        return $this->
        render('ConciergerieBundle:Entreprise:abonnements.html.twig',
           array(
            'listeAbo' => $this
            -> getUser()
            -> getEntreprise()
            -> getAbonnements()
            ));

    }



// GESTION SALARIÉS

    public function viewSalarieAction($id)
    {

        $user = $this
        -> getUser()
        -> getEntreprise();

        $em = $this
        -> getDoctrine()
        -> getManager();

        $salarie = $em
        -> getRepository('UserBundle:Salarie')
        -> find($id);

        if ($salarie === null) {
            throw new NotFoundHttpException("Ce salarié n'existe pas.");
        }

        if ($salarie->getEntreprise() != $user) {
            throw new NotFoundHttpException("Ce salarié n'est pas affilié à votre entreprise.");
        }

        return $this -> render('ConciergerieBundle:Entreprise:viewSalarie.html.twig',
            array(
                'salarie' => $salarie,
                ));

    }



    public function addSalarieAction(Request $request)
    {

        $user = $this
        -> getUser()
        -> getEntreprise();

        $form = $this
        -> get('form.factory')
        -> createBuilder(FormType::class, $user)
        -> add(
            'salaries',             // Nom du champ
            EntityType::class,      // Type du champ
            array(                  // Options du type du champ
                'class'         => 'UserBundle:Salarie',
                'choice_label'  =>
                function ($salaries) {
                    return "- ".
                    strtoupper($salaries->getNom()).
                    " ".
                    ucfirst(strtolower($salaries->getPrenom())).
                    " né le ".
                    date_format($salaries->getDateNaissance(),'d/m/Y');
                },
                'query_builder' =>
                function ($repository) {
                    return $repository
                    -> createQueryBuilder('s')
                    -> where ('s.entreprise is NULL')
                    -> orderBy('s.nom', 'ASC');
                },
                'label'         =>  false,
                'multiple'      =>  true,
                'placeholder'   => 'Choisissez vos salariés'
                )
            )
        -> getForm();


        if ($request-> isMethod('POST') && $form-> handleRequest($request)->isValid()) {

            $em = $this
            -> getDoctrine()
            -> getManager();

            foreach ($user->getSalaries() as $salarie){
                $salarie->setEntreprise($user);
            }

            $em
            -> flush();

            return $this
            -> redirectToRoute('conciergerie_ECEntreprise_listeSalaries');

        }

        return $this
        ->  render('ConciergerieBundle:Entreprise:addSalarie.html.twig',
            array(
                'form' => $form -> createView(),
                )
            );

    }



    public function deleteSalarieAction(Request $request, $id)
    {

        $user = $this
        -> getUser()
        -> getEntreprise();

        $em = $this
        -> getDoctrine()
        -> getManager();

        $salarie = $em
        -> getRepository('UserBundle:Salarie')
        -> find($id);

        if ($salarie === null) {
            throw new NotFoundHttpException("Le salarié ".$id." n'existe pas");
        }

        if ($salarie->getEntreprise() != $user) {
            throw new NotFoundHttpException("Ce salarié n'est pas affilié à votre entreprise.");
        }

        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $user
            -> removeSalary($salarie);

            $em
            -> persist($user);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('SalarieDelete', "Salarié supprimé!");

            return $this
            -> redirectToRoute('conciergerie_ECEntreprise_listeSalaries');

        }

        return $this
        -> render('ConciergerieBundle:Entreprise:deleteSalarie.html.twig',
            array(
                'salarie' => $salarie,
                'form'    => $form -> createView()
                ));

    }



    public function listeSalarieAction()
    {

        $entreprise = $this
        -> getUser()
        -> getEntreprise();

        $listeSalaries = $entreprise -> getSalaries();

        return $this -> render('ConciergerieBundle:Entreprise:salaries.html.twig',
            array(
                'listeSalaries' => $listeSalaries
                ));

    }



    public function monCompteAction(Request $request)
    {

        $user = $this
        -> getUser();

        $form = $this
        -> createForm(
            RegistrationType::class,
            $user,
            array('label'=>'Entreprise')
            );

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em = $this
            -> getDoctrine()
            -> getManager();

            $em
            -> persist($user);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('CompteModif', 'Le compte a bien été modifié.');

            return $this->redirectToRoute('conciergerie_ECEntreprise');
        }

        return $this->render('ConciergerieBundle:Entreprise:monCompte.html.twig',
            array(
                'form' => $form -> createView(),
                ));

    }



    public function affichageServicesAction()
    {

        return $this->render('ConciergerieBundle:Entreprise:servicesEntreprise.html.twig');

    }
    

}
