<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>en|fr|ar)/login$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_login')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\SecurityController::loginAction',));
        }
        not_fos_user_security_login:

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>en|fr|ar)/login_check$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_check')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\SecurityController::checkAction',));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>en|fr|ar)/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_security_logout')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\SecurityController::logoutAction',));
        }

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>en|fr|ar)/profile/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_show')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ProfileController::showAction',));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>en|fr|ar)/profile/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ProfileController::editAction',));
        }

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>en|fr|ar)/register/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_register')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\RegistrationController::registerAction',));
        }

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>en|fr|ar)/register/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_check_email')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>en|fr|ar)/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\RegistrationController::confirmAction',));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>en|fr|ar)/register/confirmed$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirmed;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirmed')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>en|fr|ar)/resetting/request$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_request')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ResettingController::requestAction',));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>en|fr|ar)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_send_email')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>en|fr|ar)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_check_email')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>en|fr|ar)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>en|fr|ar)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_change_password')), array (  '_controller' => 'Innov\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',));
        }
        not_fos_user_change_password:

        // fos_user_admin
        if (preg_match('#^/(?P<_locale>en|fr|ar)/admin$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_admin')), array (  '_controller' => 'InnovUserBundle:Admin:index',));
        }

        // InnovGroup_allGroups
        if (preg_match('#^/(?P<_locale>en|fr|ar)/groupes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_allGroups')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::listeDesGroupesAction',  '_locale' => 'fr',));
        }

        // InnovGroup_creerGroup
        if (preg_match('#^/(?P<_locale>en|fr|ar)/creer/groupe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_creerGroup')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::creerGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_supprDansGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/supprDansGroupe/(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_supprDansGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::supprDansGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_entrerGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/groupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_entrerGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::entrerGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_voirProfil
        if (preg_match('#^/(?P<_locale>en|fr|ar)/voirProfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_voirProfil')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::voirProfilAction',  '_locale' => 'fr',));
        }

        // InnovGroup_entrerGroupe2
        if (preg_match('#^/(?P<_locale>en|fr|ar)/groupe/(?P<id_groupe>[^/]++)/(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_entrerGroupe2')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::entrerGroupe2Action',  '_locale' => 'fr',));
        }

        // InnovGroup_entrerDossier
        if (preg_match('#^/(?P<_locale>en|fr|ar)/dossier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_entrerDossier')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::entrerDossierAction',  '_locale' => 'fr',));
        }

        // InnovGroup_voirToutesMesNotifs
        if (preg_match('#^/(?P<_locale>en|fr|ar)/mesnotifications$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_voirToutesMesNotifs')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::voirMesNotifsAction',  '_locale' => 'fr',));
        }

        // InnovGroup_demandeRejoindreGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/rejoindre/groupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_demandeRejoindreGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::demandeRejoindreGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_accepterDemandeGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/accepter/demande/(?P<user_id>[^/]++)/(?P<groupe_id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_accepterDemandeGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accepterDemandeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_creerDossier
        if (preg_match('#^/(?P<_locale>en|fr|ar)/creer/dossier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_creerDossier')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::creerDossierAction',  '_locale' => 'fr',));
        }

        // InnovGroup_creerSousDossier
        if (preg_match('#^/(?P<_locale>en|fr|ar)/creer/sousDossier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_creerSousDossier')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::creerSousDossierAction',  '_locale' => 'fr',));
        }

        // InnovGroup_addExamCollection
        if (preg_match('#^/(?P<_locale>en|fr|ar)/add/ExamCollection/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_addExamCollection')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::addExamCollectionAction',  '_locale' => 'fr',));
        }

        // InnovGroup_test
        if (preg_match('#^/(?P<_locale>en|fr|ar)/add/test$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_test')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::testAction',  '_locale' => 'fr',));
        }

        // InnovGroup_test2
        if (preg_match('#^/(?P<_locale>en|fr|ar)/add/test2/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_test2')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::test2Action',  '_locale' => 'fr',));
        }

        // InnovGroup_test3
        if (preg_match('#^/(?P<_locale>en|fr|ar)/add/test3/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_test3')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::test3Action',  '_locale' => 'fr',));
        }

        // InnovGroup_creerSousDossierPerso
        if (preg_match('#^/(?P<_locale>en|fr|ar)/creer/sousDossierPerso$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_creerSousDossierPerso')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::creerSousDossierPersoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_switcher
        if (preg_match('#^/(?P<_locale>en|fr|ar)/switcher$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_switcher')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::switcherAction',  '_locale' => 'fr',));
        }

        // InnovGroup_renderJsTree
        if (preg_match('#^/(?P<_locale>en|fr|ar)/renderJsTree$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_renderJsTree')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::renderJsTreeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_rechercheAutoComplete
        if (preg_match('#^/(?P<_locale>en|fr|ar)/rechercheAuto$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_rechercheAutoComplete')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::rechercheAutoCompleteAction',  '_locale' => 'fr',));
        }

        // InnovGroup_ajaxTags
        if (preg_match('#^/(?P<_locale>en|fr|ar)/ajaxTags$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_ajaxTags')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::ajaxTagsAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerDoc
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerDoc$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerDoc')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerDocAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerExCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_deletePerso
        if (preg_match('#^/(?P<_locale>en|fr|ar)/deletePerso$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_deletePerso')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::deletePersoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_getTags
        if (preg_match('#^/(?P<_locale>en|fr|ar)/getTags$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_getTags')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::getTagsAction',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearch2
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearch$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearch2')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearch2Action',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearch
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearch(?:/(?P<query>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearch')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearchAction',  'query' => '_a_a_a_a_',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearch3
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearch/(?P<query>[^/]++)/ordre(?:/(?P<sort_mode>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearch3')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearchAction',  'sort_mode' => 'default',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearch4
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearch/(?P<query>[^/]++)/ordre/(?P<sort_mode>[^/]++)/(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearch4')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearchAction',  'sort_mode' => 'default',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearchGroupe2
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearchGroupe/(?P<get_query>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearchGroupe2')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearchGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_solrSearchGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/solrSearchGroupe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_solrSearchGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::solrSearchGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_affircheFormSearchGroup
        if (preg_match('#^/(?P<_locale>en|fr|ar)/affircheFormSearchGroup$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_affircheFormSearchGroup')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::affircheFormSearchGroupAction',  '_locale' => 'fr',));
        }

        // InnovGroup_accueil
        if (preg_match('#^/(?P<_locale>en|fr|ar)/accueil(?:/(?P<login_error>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_accueil')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accueilAction',  'login_error' => false,  '_locale' => 'fr',));
        }

        // InnovGroup_ajoutMembre
        if (preg_match('#^/(?P<_locale>en|fr|ar)/ajoutMembre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_ajoutMembre')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::ajoutMembreAction',  '_locale' => 'fr',));
        }

        // InnovGroup_partagerExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/partagerExCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_partagerExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::partagerExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_partagerEssaiCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/partagerEssaiCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_partagerEssaiCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::partagerEssaiCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_renderListeExamCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/renderListeExamCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_renderListeExamCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::renderListeExamCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_commenterExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/commenterExCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_commenterExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::commenterExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_commenterEssaiCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/commenterEssaiCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_commenterEssaiCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::commenterEssaiCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_SupprimerCommentExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/SupprimerCommentExCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_SupprimerCommentExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::SupprimerCommentExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_SupprimerCommentEssaiCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/SupprimerCommentEssaiCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_SupprimerCommentEssaiCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::SupprimerCommentEssaiCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_AfficherCommentExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/AfficherCommentExCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_AfficherCommentExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::AfficherCommentExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_AfficherCommentEssaiCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/AfficherCommentEssaiCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_AfficherCommentEssaiCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::AfficherCommentEssaiCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerEssaiCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerEssaiCo$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerEssaiCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerEssaiCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_AjouterAuxFavoris
        if (preg_match('#^/(?P<_locale>en|fr|ar)/AjouterAuxFavoris$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_AjouterAuxFavoris')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::AjouterAuxFavorisAction',  '_locale' => 'fr',));
        }

        // InnovGroup_voirMembres
        if (preg_match('#^/(?P<_locale>en|fr|ar)/voirMembres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_voirMembres')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::voirMembresAction',  '_locale' => 'fr',));
        }

        // InnovGroup_vouloirRejoindreGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/vouloirRejoindreGroupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_vouloirRejoindreGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::vouloirRejoindreGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerPublic
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerPublic$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerPublic')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerPublicAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerPublicExCo
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerPublicExCo/(?P<idComplet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerPublicExCo')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerPublicExCoAction',  '_locale' => 'fr',));
        }

        // InnovGroup_visionnerPublicDoc
        if (preg_match('#^/(?P<_locale>en|fr|ar)/visionnerPublicDoc/(?P<idComplet>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_visionnerPublicDoc')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::visionnerPublicDocAction',  '_locale' => 'fr',));
        }

        // InnovGroup_index
        if (preg_match('#^/(?P<_locale>en|fr|ar)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'InnovGroup_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_index')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accueilAction',  '_locale' => 'fr',));
        }

        // InnovGroup_index3
        if (preg_match('#^/(?P<_locale>en|fr|ar)?(?:/(?P<login_error>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_index3')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accueilAction',  'login_error' => false,  '_locale' => 'fr',));
        }

        // InnovGroup_renderFormRejoindreGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/renderFormRejoindreGroupe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_renderFormRejoindreGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::renderFormRejoindreGroupeAction',  '_locale' => 'fr',));
        }

        // InnovGroup_traduction
        if (preg_match('#^/(?P<_locale>en|fr|ar)/traduction/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_traduction')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::traductionAction',  '_locale' => 'fr',));
        }

        // innovGroup_consulterDocGroupe
        if (preg_match('#^/(?P<_locale>en|fr|ar)/consulterDocGroupe/(?P<id>[^/]++)/order_by(?:/(?P<sort_mode>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovGroup_consulterDocGroupe')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::consulterDocGroupeAction',  'sort_mode' => 'default',  '_locale' => 'fr',));
        }

        // innovGroup_indexerTous
        if (preg_match('#^/(?P<_locale>en|fr|ar)/indexerTous/(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'innovGroup_indexerTous')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::indexerTousAction',  '_locale' => 'fr',));
        }

        // InnovGroup_index2
        if (preg_match('#^/(?P<_locale>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_index2')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accueilAction',  '_locale' => 'fr',));
        }

        // InnovGroup_capture_erreur
        if (preg_match('#^/(?P<tout_type_url>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'InnovGroup_capture_erreur')), array (  '_controller' => 'Innov\\GroupBundle\\Controller\\GroupController::accueilAction',));
        }

        // _uploader_upload_gallery
        if ($pathinfo === '/_uploader/gallery/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__uploader_upload_gallery;
            }

            return array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
        }
        not__uploader_upload_gallery:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
