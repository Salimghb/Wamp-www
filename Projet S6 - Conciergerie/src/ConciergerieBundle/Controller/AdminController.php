<?php

namespace ConciergerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use UserBundle\Entity\Entreprise;
use UserBundle\Entity\Salarie;
use UserBundle\Entity\Prestataire;

use ConciergerieBundle\Entity\Commentaire;
use ConciergerieBundle\Entity\Bouquet;
use ConciergerieBundle\Entity\Abonnement;
use ConciergerieBundle\Entity\Commande;

use ConciergerieBundle\Form\BouquetType;


class AdminController extends Controller
{


    public function indexAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeCommentaires = $em
        -> getRepository('ConciergerieBundle:Commentaire')
        -> findBy(
            array('published' =>  false),       
            array('date'        => 'desc'),
            5,
            null         
            );

        $listeCommandes = $em
        -> getRepository('ConciergerieBundle:Commande')
        -> findBy(
            array(),       
            array('date' => 'desc'),
            5,
            null         
            );

        $listeAbonnements = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> findBy(
            array(),       
            array('id' => 'desc'),
            5,
            null         
            );

        return $this->render('ConciergerieBundle:Admin:index.html.twig',
            array(
                'listeAbonnements'  => $listeAbonnements,
                'listeCommentaires' => $listeCommentaires,
                'listeCommandes'    => $listeCommandes
                ));

    }



// GESTION ENTREPRISES
    public function listeEntreprisesAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeEntreprises = $em
        -> getRepository('UserBundle:Entreprise')
        -> findAll();

        return $this -> render('ConciergerieBundle:Admin:listeEntreprises.html.twig',
            array(
                'listeEntreprises' => $listeEntreprises
                ));

    }

    public function viewEntrepriseAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $entreprise = $em
        -> getRepository('UserBundle:Entreprise')
        -> find($id);

        if ($entreprise === null) {
            throw new NotFoundHttpException("Cette entreprise n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewEntreprise.html.twig',
            array(
                'entreprise' => $entreprise
                ));

    }

    public function deleteEntrepriseAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $entreprise = $em
        -> getRepository('UserBundle:Entreprise')
        -> find($id);

        if ($entreprise === null) {
            throw new NotFoundHttpException("L'entreprise ".$id." n'existe pas");
        }

        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            foreach ($entreprise->getSalaries() as $salarie) {
                $entreprise->removeSalary($salarie);
            }

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->deleteUser($entreprise->getUser());

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('EntrepriseDelete', "Entreprise supprimée!");

            return $this
            -> redirectToRoute('conciergerie_admin_entreprises');

        }

        return $this
        -> render('ConciergerieBundle:Admin:deleteEntreprise.html.twig',
            array(
                'entreprise' => $entreprise,
                'form'       => $form -> createView()
                ));

    }



// GESTION PRESTATAIRES
    public function listePrestatairesAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listePrestataires = $em
        -> getRepository('UserBundle:Prestataire')
        -> findAll();

        return $this -> render('ConciergerieBundle:Admin:listePrestataires.html.twig',
            array(
                'listePrestataires' => $listePrestataires
                ));

    }

    public function viewPrestataireAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $prestataire = $em
        -> getRepository('UserBundle:Prestataire')
        -> find($id);

        if ($prestataire === null) {
            throw new NotFoundHttpException("Ce prestataire n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewPrestataire.html.twig',
            array(
                'prestataire' => $prestataire
                ));

    }

    public function deletePrestataireAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $prestataire = $em
        -> getRepository('UserBundle:Prestataire')
        -> find($id);

        if ($prestataire === null) {
            throw new NotFoundHttpException("Le prestataire ".$id." n'existe pas");
        }

        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $userManager = $this->container->get('fos_user.user_manager');
            $userManager->deleteUser($prestataire->getUser());

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('PrestataireDelete', "Prestataire supprimé!");

            return $this
            -> redirectToRoute('conciergerie_admin_prestataires');

        }

        return $this
        -> render('ConciergerieBundle:Admin:deletePrestataire.html.twig',
            array(
                'prestataire' => $prestataire,
                'form'    => $form -> createView()
                ));

    }



// GESTION ABONNEMENTS
    public function listeAbonnementsAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeAbonnements = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> findAll();

        return $this -> render('ConciergerieBundle:Admin:listeAbonnements.html.twig',
            array(
                'listeAbonnements' => $listeAbonnements
                ));

    }

    public function viewAbonnementAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $abonnement = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> find($id);

        if ($abonnement === null) {
            throw new NotFoundHttpException("Cet abonnement n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewAbonnement.html.twig',
            array(
                'abonnement' => $abonnement
                ));

    }

    public function deleteAbonnementAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $abonnement = $em
        -> getRepository('ConciergerieBundle:Abonnement')
        -> find($id);

        if ($abonnement === null) {
            throw new NotFoundHttpException("L'abonnement ".$id." n'existe pas");
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
            -> add('AbonnementDelete', "Abonnement supprimé!");

            return $this
            -> redirectToRoute('conciergerie_admin_abonnements');

        }

        return $this
        -> render('ConciergerieBundle:Admin:deleteAbonnement.html.twig',
            array(
                'abonnement' => $abonnement,
                'form'    => $form -> createView()
                ));

    }



// GESTION COMMANDES
    public function listeCommandesAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeCommandes = $em
        -> getRepository('ConciergerieBundle:Commande')
        -> findAll();

        return $this -> render('ConciergerieBundle:Admin:listeCommandes.html.twig',
            array(
                'listeCommandes' => $listeCommandes
                ));

    }

    public function viewCommandeAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $commande = $em
        -> getRepository('ConciergerieBundle:Commande')
        -> find($id);

        if ($commande === null) {
            throw new NotFoundHttpException("Cette commande n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewCommande.html.twig',
            array(
                'commande' => $commande
                ));

    }

    public function deleteCommandeAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $commande = $em
        -> getRepository('ConciergerieBundle:Commande')
        -> find($id);

        if ($commande === null) {
            throw new NotFoundHttpException("La commande ".$id." n'existe pas");
        }

        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $em
            -> remove($commande);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('CommandeDelete', "Commande supprimée!");

            return $this
            -> redirectToRoute('conciergerie_admin_commandes');

        }

        return $this
        -> render('ConciergerieBundle:Admin:deleteCommande.html.twig',
            array(
                'commande' => $commande,
                'form'    => $form -> createView()
                ));

    }



//GESTION COMMENTAIRES
    public function listeCommentairesAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeCommentaires = $em
        -> getRepository('ConciergerieBundle:Commentaire')
        -> findBy(
            array('published' =>  0),       
            array('date'      => 'asc'),
            null,
            null              
            );

        return $this -> render('ConciergerieBundle:Admin:listeCommentaires.html.twig',
            array(
                'listeCommentaires' => $listeCommentaires
                ));

    }

    public function viewCommentaireAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $commentaire = $em
        -> getRepository('ConciergerieBundle:Commentaire')
        -> find($id);

        if ($commentaire === null) {
            throw new NotFoundHttpException("Ce commentaire n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewCommentaire.html.twig',
            array(
                'commentaire' => $commentaire
                ));

    }

    public function deleteCommentaireAction(Request $request,$id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $commentaire = $em
        -> getRepository('ConciergerieBundle:Commentaire')
        -> find($id);

        if ($commentaire === null) {
            throw new NotFoundHttpException("Le commentaire ".$id." n'existe pas");
        }

        $em
        -> remove($commentaire);

        $em
        -> flush();

        $request
        -> getSession()
        -> getFlashBag()
        -> add('CommentaireDelete', "Commentaire supprimé!");

        return $this
        -> redirectToRoute('conciergerie_admin_commentaires');

    }

    public function validerCommentaireAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $commentaire = $em
        -> getRepository('ConciergerieBundle:Commentaire')
        -> find($id);

        if ($commentaire === null) {
            throw new NotFoundHttpException("Le commentaire ".$id." n'existe pas");
        }

        $commentaire
        -> setPublished(true);

        $em
        -> flush();

        $request
        -> getSession()
        -> getFlashBag()
        -> add('CommentaireValid', "Commentaire validé!");

        return $this
        -> redirectToRoute('conciergerie_admin_commentaires');

    }



//GESTION BOUQUETS
    public function listeBouquetsAction()
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $listeBouquets = $em
        -> getRepository('ConciergerieBundle:Bouquet')
        -> findBy(
            array(),       
            array('id'=> 'asc'),
            null,
            null              
            );

        return $this -> render('ConciergerieBundle:Admin:listeBouquets.html.twig',
            array(
                'listeBouquets' => $listeBouquets
                ));

    }

    public function viewBouquetAction($id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $bouquet = $em
        -> getRepository('ConciergerieBundle:Bouquet')
        -> find($id);

        if ($bouquet === null) {
            throw new NotFoundHttpException("Ce bouquet n'existe pas.");
        }

        return $this -> render('ConciergerieBundle:Admin:viewBouquet.html.twig',
            array(
                'bouquet' => $bouquet
                ));

    }

    public function deleteBouquetAction(Request $request, $id)
    {

        $em = $this
        -> getDoctrine()
        -> getManager();

        $bouquet = $em
        -> getRepository('ConciergerieBundle:Bouquet')
        -> find($id);

        if ($bouquet === null) {
            throw new NotFoundHttpException("Le bouquet ".$id." n'existe pas");
        }
        $form = $this
        -> get('form.factory')
        -> create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em
            -> remove($bouquet);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('BouquetDelete', "Bouquet supprimé!");

            return $this
            -> redirectToRoute('conciergerie_admin_bouquets');
        }
        return $this
        -> render('ConciergerieBundle:Admin:deleteBouquet.html.twig',
            array(
                'bouquet' => $bouquet,
                'form'    => $form -> createView()
                ));

    }

    public function addBouquetAction(Request $request)
    {

        $bouquet = new Bouquet();

        $form = $this
        -> get('form.factory')
        -> create(BouquetType::class, $bouquet);

        if ($request-> isMethod('POST') && $form-> handleRequest($request)->isValid())
        {

            $em = $this
            -> getDoctrine()
            -> getManager();

            $em
            -> persist($bouquet);

            $em
            -> flush();

            $request
            -> getSession()
            -> getFlashBag()
            -> add('BouquetAjout', 'Le bouquet a bien été ajouté !');

            return $this
            -> redirectToRoute('conciergerie_admin_bouquet', array('id' => $bouquet-> getId()));
        }

        return $this
        ->  render('ConciergerieBundle:Admin:addBouquet.html.twig',
            array(
                'form' => $form -> createView(),
                )
            );

    }

    

}
