<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // conciergerie_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'conciergerie_homepage');
            }

            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::indexAction',  '_route' => 'conciergerie_homepage',);
        }

        // conciergerie_preregister
        if ($pathinfo === '/preregister') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::preregisterAction',  '_route' => 'conciergerie_preregister',);
        }

        // conciergerie_redirector
        if ($pathinfo === '/redirector') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::redirectorAction',  '_route' => 'conciergerie_redirector',);
        }

        // conciergerie_services
        if ($pathinfo === '/services') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::affichageServicesAction',  '_route' => 'conciergerie_services',);
        }

        // conciergerie_infosConciergerie
        if ($pathinfo === '/presentation') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::infosConciergerieAction',  '_route' => 'conciergerie_infosConciergerie',);
        }

        // conciergerie_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::contactAction',  '_route' => 'conciergerie_contact',);
        }

        if (0 === strpos($pathinfo, '/entreprise')) {
            // conciergerie_ECEntreprise
            if ($pathinfo === '/entreprise') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::indexAction',  '_route' => 'conciergerie_ECEntreprise',);
            }

            if (0 === strpos($pathinfo, '/entreprise/abonnement')) {
                // conciergerie_ECEntreprise_listeAbo
                if ($pathinfo === '/entreprise/abonnements') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::listeAboAction',  '_route' => 'conciergerie_ECEntreprise_listeAbo',);
                }

                // conciergerie_ECEntreprise_viewAbo
                if (preg_match('#^/entreprise/abonnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECEntreprise_viewAbo')), array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::viewAboAction',));
                }

                if (0 === strpos($pathinfo, '/entreprise/abonnements')) {
                    // conciergerie_ECEntreprise_addAbo
                    if ($pathinfo === '/entreprise/abonnements/add') {
                        return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::addAboAction',  '_route' => 'conciergerie_ECEntreprise_addAbo',);
                    }

                    // conciergerie_ECEntreprise_deleteAbo
                    if (0 === strpos($pathinfo, '/entreprise/abonnements/del') && preg_match('#^/entreprise/abonnements/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECEntreprise_deleteAbo')), array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::deleteAboAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/entreprise/salarie')) {
                if (0 === strpos($pathinfo, '/entreprise/salaries')) {
                    // conciergerie_ECEntreprise_listeSalaries
                    if ($pathinfo === '/entreprise/salaries') {
                        return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::listeSalarieAction',  '_route' => 'conciergerie_ECEntreprise_listeSalaries',);
                    }

                    // conciergerie_ECEntreprise_deleteSalarie
                    if (0 === strpos($pathinfo, '/entreprise/salaries/delete') && preg_match('#^/entreprise/salaries/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECEntreprise_deleteSalarie')), array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::deleteSalarieAction',));
                    }

                }

                // conciergerie_ECEntreprise_viewSalarie
                if (preg_match('#^/entreprise/salarie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECEntreprise_viewSalarie')), array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::viewSalarieAction',));
                }

                // conciergerie_ECEntreprise_addSalarie
                if ($pathinfo === '/entreprise/salaries/add') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::addSalarieAction',  '_route' => 'conciergerie_ECEntreprise_addSalarie',);
                }

            }

            // conciergerie_ECEntreprise_monCompte
            if ($pathinfo === '/entreprise/monCompte') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::monCompteAction',  '_route' => 'conciergerie_ECEntreprise_monCompte',);
            }

            // conciergerie_ECEntreprise_services
            if ($pathinfo === '/entreprise/services') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\EntrepriseController::affichageServicesAction',  '_route' => 'conciergerie_ECEntreprise_services',);
            }

        }

        if (0 === strpos($pathinfo, '/prestataire')) {
            // conciergerie_ECPrestataire
            if ($pathinfo === '/prestataire') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::indexAction',  '_route' => 'conciergerie_ECPrestataire',);
            }

            // conciergerie_ECPrestataire_addService
            if ($pathinfo === '/prestataire/add') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::addServiceAction',  '_route' => 'conciergerie_ECPrestataire_addService',);
            }

            if (0 === strpos($pathinfo, '/prestataire/service')) {
                // conciergerie_ECPrestataire_listeServices
                if ($pathinfo === '/prestataire/services') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::listeServicesAction',  '_route' => 'conciergerie_ECPrestataire_listeServices',);
                }

                // conciergerie_ECPrestataire_service
                if (preg_match('#^/prestataire/service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECPrestataire_service')), array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::viewServiceAction',));
                }

                // conciergerie_ECPrestataire_commandes
                if (0 === strpos($pathinfo, '/prestataire/service/commandes') && preg_match('#^/prestataire/service/commandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECPrestataire_commandes')), array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::commandesServiceAction',));
                }

                // conciergerie_ECPrestataire_validerCommande
                if (0 === strpos($pathinfo, '/prestataire/service/validercommandes') && preg_match('#^/prestataire/service/validercommandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECPrestataire_validerCommande')), array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::validerCommandeAction',));
                }

                // conciergerie_ECPrestataire_commentaires
                if (0 === strpos($pathinfo, '/prestataire/service/commentaires') && preg_match('#^/prestataire/service/commentaires/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECPrestataire_commentaires')), array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::commentairesServiceAction',));
                }

            }

            // conciergerie_ECPrestataire_monCompte
            if ($pathinfo === '/prestataire/monCompte') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::monCompteAction',  '_route' => 'conciergerie_ECPrestataire_monCompte',);
            }

            // conciergerie_ECPrestataire_historique
            if ($pathinfo === '/prestataire/historique') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::historiqueAction',  '_route' => 'conciergerie_ECPrestataire_historique',);
            }

            // conciergerie_ECPrestataire_services
            if ($pathinfo === '/prestataire/services') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\PrestataireController::affichageServicesAction',  '_route' => 'conciergerie_ECPrestataire_services',);
            }

        }

        if (0 === strpos($pathinfo, '/salarie')) {
            // conciergerie_ECSalarie
            if ($pathinfo === '/salarie') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::indexAction',  '_route' => 'conciergerie_ECSalarie',);
            }

            // conciergerie_ECSalarie_service
            if (0 === strpos($pathinfo, '/salarie/service') && preg_match('#^/salarie/service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_service')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::viewServiceAction',));
            }

            if (0 === strpos($pathinfo, '/salarie/commande')) {
                // conciergerie_ECSalarie_commande
                if (preg_match('#^/salarie/commande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_commande')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::CommandeServiceAction',));
                }

                // conciergerie_ECSalarie_ConfirmCommande
                if (0 === strpos($pathinfo, '/salarie/commande/confirm') && preg_match('#^/salarie/commande/confirm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_ConfirmCommande')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::ConfirmCommandeServiceAction',));
                }

                // conciergerie_ECSalarie_listeCommandes
                if ($pathinfo === '/salarie/commandes') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::listeCommandesAction',  '_route' => 'conciergerie_ECSalarie_listeCommandes',);
                }

                // conciergerie_ECSalarie_commandePay
                if (preg_match('#^/salarie/commande/(?P<id>[^/]++)/pay$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_commandePay')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::commandePayAction',));
                }

                // conciergerie_ECSalarie_confirmPay
                if (preg_match('#^/salarie/commande/(?P<id>[^/]++)/payConfirm$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_confirmPay')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::confirmPayAction',));
                }

                // conciergerie_ECSalarie_confirmLivraison
                if (preg_match('#^/salarie/commande/(?P<id>[^/]++)/livraisonConfirm$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_confirmLivraison')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::confirmLivraisonAction',));
                }

                // conciergerie_ECSalarie_commenterService
                if (0 === strpos($pathinfo, '/salarie/commande/comment') && preg_match('#^/salarie/commande/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_ECSalarie_commenterService')), array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::commenterServiceAction',));
                }

            }

            // conciergerie_ECSalarie_monEntreprise
            if ($pathinfo === '/salarie/entreprise') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::monEntrepriseAction',  '_route' => 'conciergerie_ECSalarie_monEntreprise',);
            }

            // conciergerie_ECSalarie_monCompte
            if ($pathinfo === '/salarie/monCompte') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\SalarieController::monCompteAction',  '_route' => 'conciergerie_ECSalarie_monCompte',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // conciergerie_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::indexAction',  '_route' => 'conciergerie_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/entreprise')) {
                // conciergerie_admin_entreprises
                if ($pathinfo === '/admin/entreprises') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listeEntreprisesAction',  '_route' => 'conciergerie_admin_entreprises',);
                }

                // conciergerie_admin_entreprise
                if (preg_match('#^/admin/entreprise/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_entreprise')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewEntrepriseAction',));
                }

                // conciergerie_admin_deleteEntreprise
                if (0 === strpos($pathinfo, '/admin/entreprise/delete') && preg_match('#^/admin/entreprise/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deleteEntreprise')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deleteEntrepriseAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/prestataire')) {
                // conciergerie_admin_prestataires
                if ($pathinfo === '/admin/prestataires') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listePrestatairesAction',  '_route' => 'conciergerie_admin_prestataires',);
                }

                // conciergerie_admin_prestataire
                if (preg_match('#^/admin/prestataire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_prestataire')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewPrestataireAction',));
                }

                // conciergerie_admin_deletePrestataire
                if (0 === strpos($pathinfo, '/admin/prestataire/delete') && preg_match('#^/admin/prestataire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deletePrestataire')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deletePrestataireAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/abonnement')) {
                // conciergerie_admin_abonnements
                if ($pathinfo === '/admin/abonnements') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listeAbonnementsAction',  '_route' => 'conciergerie_admin_abonnements',);
                }

                // conciergerie_admin_abonnement
                if (preg_match('#^/admin/abonnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_abonnement')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewAbonnementAction',));
                }

                // conciergerie_admin_deleteAbonnement
                if (0 === strpos($pathinfo, '/admin/abonnement/delete') && preg_match('#^/admin/abonnement/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deleteAbonnement')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deleteAbonnementAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/comm')) {
                if (0 === strpos($pathinfo, '/admin/commande')) {
                    // conciergerie_admin_commandes
                    if ($pathinfo === '/admin/commandes') {
                        return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listeCommandesAction',  '_route' => 'conciergerie_admin_commandes',);
                    }

                    // conciergerie_admin_commande
                    if (preg_match('#^/admin/commande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_commande')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewCommandeAction',));
                    }

                    // conciergerie_admin_deleteCommande
                    if (0 === strpos($pathinfo, '/admin/commande/delete') && preg_match('#^/admin/commande/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deleteCommande')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deleteCommandeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/commentaire')) {
                    // conciergerie_admin_commentaires
                    if ($pathinfo === '/admin/commentaires') {
                        return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listeCommentairesAction',  '_route' => 'conciergerie_admin_commentaires',);
                    }

                    // conciergerie_admin_commentaire
                    if (preg_match('#^/admin/commentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_commentaire')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewCommentaireAction',));
                    }

                    // conciergerie_admin_deleteCommentaire
                    if (0 === strpos($pathinfo, '/admin/commentaire/delete') && preg_match('#^/admin/commentaire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deleteCommentaire')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deleteCommentaireAction',));
                    }

                    // conciergerie_admin_validerCommentaire
                    if (0 === strpos($pathinfo, '/admin/commentaire/valider') && preg_match('#^/admin/commentaire/valider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_validerCommentaire')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::validerCommentaireAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/bouquet')) {
                // conciergerie_admin_bouquets
                if ($pathinfo === '/admin/bouquets') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::listeBouquetsAction',  '_route' => 'conciergerie_admin_bouquets',);
                }

                // conciergerie_admin_addBouquet
                if ($pathinfo === '/admin/bouquet/add') {
                    return array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::addBouquetAction',  '_route' => 'conciergerie_admin_addBouquet',);
                }

                // conciergerie_admin_bouquet
                if (preg_match('#^/admin/bouquet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_bouquet')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::viewBouquetAction',));
                }

                // conciergerie_admin_deleteBouquet
                if (0 === strpos($pathinfo, '/admin/bouquet/delete') && preg_match('#^/admin/bouquet/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conciergerie_admin_deleteBouquet')), array (  '_controller' => 'ConciergerieBundle\\Controller\\AdminController::deleteBouquetAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_user_registration_register
        if (0 === strpos($pathinfo, '/register') && preg_match('#^/register(?:/(?P<role>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  'role' => 'Salarie',));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ConciergerieBundle\\Controller\\OfflineController::redirectorAction',  '_route' => 'fos_user_security_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
