<?php

namespace Innov\GroupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
// use de ACL
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use pour le paramConverter
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
//use Innov\GroupBundle\Controller\UploadHandler\UploadHandler ;
//use des entites et formulaires
use Innov\GroupBundle\Form\GroupeType;
use Innov\GroupBundle\Form\AjoutMembreType;
use Innov\GroupBundle\Entity\Groupe;
use Innov\GroupBundle\Entity\Exam;
use Innov\GroupBundle\Entity\EssaiCollection;
use Innov\GroupBundle\Entity\ExamCollection;
use Innov\GroupBundle\Entity\CorrectionCollection;
use Innov\GroupBundle\Form\DossierType;
use Innov\GroupBundle\Form\ExamCollectionType;
use Innov\GroupBundle\Form\SousDossierType;
use Innov\UserBundle\Entity\User;
use Innov\UserBundle\Entity\Notification;
use Innov\GroupBundle\Entity\GroupMembre;
use Innov\GroupBundle\Entity\SearchText;
use Innov\GroupBundle\Form\SearchTextType;
use Innov\UserBundle\Entity\SousDossierPerso;
use Innov\UserBundle\Entity\DossierPerso;
use Innov\UserBundle\Entity\Document;
use Innov\UserBundle\Entity\Cliche;
use Innov\UserBundle\Entity\Tag;
use Innov\UserBundle\Entity\Requete;

// include pour l'upload handler
include_once ('UploadHandler.php');

class GroupController extends Controller {

    //private $solrPingUrl = 'http://fr.opensolr.com/solr/hderty/admin/ping?df=titre&wt=json&indent=true';
    
    private $solrPingUrl = 'http://www.indexdepot.com/solr/34f9aed5b282f010/admin/ping?df=titre&wt=json&indent=true';
    private $solrDeleteUrl = 'http://www.indexdepot.com/solr/34f9aed5b282f010/update?stream.body=';
    
    private $type_notif_demande_rejoindre = 1;
    private $type_notif_accepter_demande = 2;
    private $type_notif_vous_a_ajouter = 3;
    
    private $notif_demande_rejoindre = 'innov.navbar.notification.notif_demande_rejoindre';
    private $notif_accepter_demande = 'innov.navbar.notification.notif_accepter_demande';
    private $notif_vous_a_ajouter = 'innov.navbar.notification.notif_vous_a_ajouter';

    private $pagination_size = 10;
    
    
    private function updateDansSolr($doc) {
        $client = $this->container->get('solarium.client');
        // get an update query instance
        $update = $client->createUpdate();
        // create a new document for the data
        $doc1 = $update->createDocument();
        $doc1->id = $doc->getIdSolr();
        $doc1->object = $doc->getTypeEntite();
        $doc1->id_object = $doc->getId();
        $doc1->titre = $doc->getTitre();
        $doc1->titre_search = $doc->getTitre();
        $doc1->description = $doc->getDescription();
        $doc1->date_ajout = $doc->getDateCreation();
        $doc1->contenu_ocr = $doc->getContenuOcr();
        $doc1->nbre_fois_favoris = 1 + log(2 * $doc->getNbreFoisFavoris() + 1);

        $doc1->nbre_vue = 1 + log(2 * $doc->getNbreVue() + 1);

        $tags_str = array();
        foreach ($doc->getTags() as $tag)
            $tags_str[] = $tag->getText();
        $doc1->tags = $tags_str;


        if ($doc->getTypeEntite() == 'examCo_') {
            $doc1->nbre_jaime = 1 + log(2 * $doc->getNbreJaime() + 1);

            $comments_str = array();
            foreach ($doc->getCommentaires() as $comment)
                $comments_str[] = $comment->getContenu();
            $doc1->commentaires = $comments_str;


            $essais_co_str = array();
            foreach ($doc->getEssaisCollections() as $essaiCo)
                $essais_co_str[] = $essaiCo->getTitre() . ' ' . $essaiCo->getDescription() . ' ' .
                        $essaiCo->getContenuOcr();
            $doc1->essai_co = $essais_co_str;
        }

        // add the documents and a commit command to the update query
        $update->addDocument($doc1);
        $update->addCommit();
        $result = $client->update($update);
    }

    private function indexerDansSolr($doc, $id_solr, $type_entite, $id_groupe = null) {
        $client = $this->container->get('solarium.client');
        // get an update query instance
        $update = $client->createUpdate();
        // create a new document for the data
        $doc1 = $update->createDocument();
        $doc1->id = $id_solr;
        $doc1->object = $type_entite;
        $doc1->id_object = $doc->getId();
        $doc1->titre = $doc->getTitre();
        $doc1->titre_search = $doc->getTitre();
        $doc1->description = $doc->getDescription();
        $doc1->date_ajout = $doc->getDateCreation();
        //$doc1->contenu_ocr = $doc->getDescription();
        // avant d'active cette ligne tester si ecoleUser n'est 
        //$doc1->ecole = $this->getEcoleUser()->getNomEcole();
        //  $doc1->tags  = $document->getTags();
        $tags_str = array();
        foreach ($doc->getTags() as $tag)
            $tags_str[] = $tag->getText();
        $doc1->tags = $tags_str;

        if ($id_groupe)
            $doc1->id_groupe = $id_groupe;

        // add the documents and a commit command to the update query
        $update->addDocument($doc1);
        $update->addCommit();
        $result = $client->update($update);
    }

    private function indexerGroupSolr($groupe) {
        $client = $this->container->get('solarium.client');
        // get an update query instance
        $update = $client->createUpdate();
        // create a new document for the data
        $doc1 = $update->createDocument();
        $doc1->id = $groupe->getIdSolr();
        $doc1->object = 'groupe_';
        $doc1->id_object = $groupe->getId();
        $doc1->nom_groupe = $groupe->getNom();
        $doc1->nom_groupe_search = $groupe->getNom();
        // add the documents and a commit command to the update query
        $update->addDocument($doc1);
        $update->addCommit();
        $result = $client->update($update);
    }

    public function accueilAction() {
        // si le user est connecter est déjà connecter on doit lui afficher des données supplémentaires 
        $docs = array();
        $similaires = array();
        $erreur_serveur = false;

        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            // mais avant de lui afficher des infos supplémentaires on teste si les serveurs SOLR et MySQL marchent bien
            if ($this->testSolr()) {
                $securityContext = $this->get('security.context');
                $user = $securityContext->getToken()->getUser();

                $em = $this->getDoctrine()->getManager();

                $repoDoc = $em->getRepository('InnovUserBundle:Document');
                $repoExCo = $em->getRepository('InnovGroupBundle:ExamCollection');

                $historique = $user->getHistoriqueRequete();
                $repoRequete = $em->getRepository('InnovUserBundle:Requete');
                $last_5_request = $repoRequete->mes5dernieresRequetes($historique);

                // si il n'a pas encore de requete rdiriger le vers la liste de tous les groupes 

                $searchText = '';
                
                // on teste si le user à déjà fait des requetes si oui ok , on lui fait des recommandations
                // si non , il s'agit probablement d'un new user et on lui affiche une autre page lui montrant le fonctionnement du site
                $nbre_requetes = sizeof($last_5_request);
                if( $nbre_requetes == 0)
                    return $this->render('InnovGroupBundle:Group:accueil.html.twig', array("new_user"=>true, "erreur_serveur" => false));                    
                
                // si le user à au moins 1 requete alors on peut lui affiché des recommandations
                // et donc on fait la requete solr correspondante
                foreach ($last_5_request as $requete) {
                    $searchText = $searchText . ' ' . $requete->getMotsCles();
                }


                $client = $this->container->get('solarium.client');

                $query = $client->createSelect();
                $query->setQueryDefaultOperator("AND");

                $dismax = $query->getDisMax();

                $dismax->setMinimumMatch('2<55%');
                // on definit le boosting de chaque champ
                $dismax->setQueryFields("contenu_ocr^4.0 titre^2.0 titre_search^2.0 description^1.6 commentaires^1.1 tags^1.5 essai_co^3.0");
                // on definit le boosting dans le cas ou il trouve un match phrase
                $dismax->setPhraseFields("contenu_ocr^5.0 titre^2.5 titre_search^2.5");
                // on definit le boosting pour améliorer le classement des documents les plus populaires, les plus vues, les plus aimes
                $dismax->setBoostFunctions("product(nbre_vue)^3.0  product(nbre_jaime)^4.0 product(nbre_fois_favoris)^5.5  ");
                // add a query and morelikethis settings (using fluent interface)
                $query->setQuery($searchText);
                       /* ->getMoreLikeThis()
                        ->setFields('tags, essai_co, contenu_ocr, description') // les champs utilise par mlt pour definir la similarite entre 2 documents
                        ->setQueryFields("contenu_ocr^4.0 description^1.6 essai_co^3.0 tags1.5") // on specifie l'ordre dans lequel les similaires doivent etre classe grace au boosting
                        ->setMinimumDocumentFrequency(1)
                        ->setMinimumTermFrequency(1)
                        ->setMinimumWordLength(3)
                        ->setBoost(true)
                        ->setCount(150);*/ // on specitife le nbre de document similaires max à renvoyer
                
                $resultset = $client->select($query);
                $mlt = $resultset->getMoreLikeThis();

                $docs = array();
                $similaires = array();

                foreach ($resultset as $document) {
                    if ($document['object'] == 'document_') {
                        $doc = $repoDoc->find($document['id_object']);
                        if ($doc)
                            $docs[] = $doc;
                    }
                    else {
                        $doc = $repoExCo->find($document['id_object']);
                        if ($doc)
                            $docs[] = $doc;
                    }

                    if($doc)
                         $similaires[$doc->getIdSolr()] = array(); 

                  /*  if ($doc) {
                        $mltResult = $mlt->getResult($document->id);
                        if ($mltResult) {
                            $similaires[$document['id']] = array();
                            foreach ($mltResult as $mltDoc) {
                                $mlt_id = $mltDoc->id;
                                $mlt_idStr = explode('_', $mlt_id);
                                if ($mlt_idStr[0] == 'document') {
                                    $sim = $repoDoc->find(intVal($mlt_idStr[1]));
                                    if ($sim)
                                        $similaires[$document['id']][] = $sim;
                                }
                                else {
                                    $sim = $repoExCo->find(intVal($mlt_idStr[1]));
                                    if ($sim)
                                        $similaires[$document['id']][] = $sim;
                                }
                            }
                        } else {
                            $similaires[$document['id']] = array(); // on rajoute cette ligne pour que les 2 tableaux similaires et documents aient la même taille
                        }
                    } */
                }
            }   // end if Solr et MySql Marchent
            // si le serveurs SOLR et MySQL  ne marche pas
            else {
                $erreur_serveur = true;
            }
                return $this->render('InnovGroupBundle:Group:accueil.html.twig', array("docs" => $docs, "similaires" => $similaires, 'erreur_serveur' => $erreur_serveur, 'new_user' => false));
        } // end if authenticated
        else
        {
            return $this->render('InnovGroupBundle:Group:accueil2.html.twig');
        }
   }

    public function renderListeExamCoAction() {


        
        $em = $this->getDoctrine()->getManager();
        $id_groupe = $_POST['id_groupe'];
        $id_groupe = intVal($id_groupe);

        $groupe = $em->getRepository('InnovGroupBundle:Groupe')->find($id_groupe);

        $examCos = $groupe->getExamCollections()->toArray();

        // on le renvoie à la dernière page de paginations pour qu'il puisse voir ce qu'il a ajouter
        $nbre_examCos = sizeof($examCos);
        $offset = floor($nbre_examCos / $this->pagination_size);

        $examCos = array_slice($examCos, $offset*$this->pagination_size, $this->pagination_size - 1);

        return $this->render('InnovGroupBundle:Group:listeExamCollection.html.twig', array('examCollections' => $examCos));
    }

    private function gestionDroitACL($objet, $droit) {
        // creating the ACL
        $aclProvider = $this->get('security.acl.provider');
        $objectIdentity = ObjectIdentity::fromDomainObject($objet);
        $acl = $aclProvider->createAcl($objectIdentity);

        // retrieving the security identity of the currently logged-in user
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();
        $securityIdentity = UserSecurityIdentity::fromAccount($user);

        // grant owner access
        $acl->insertObjectAce($securityIdentity, $droit);
        $aclProvider->updateAcl($acl);
    }

    public function creerDossierAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        $statutMembre = $repository->checkStatut($user, $groupe);

        if (!$statutMembre || $statutMembre->getStatut() === 0) {
            return $this->redirect($this->generateUrl('InnovGroup_vouloirRejoindreGroupe', array('id' => $groupe->getId())));
        } else {
            $dossier = new Dossier();

            $form = $this->createForm(new DossierType, $dossier);

            // On r�cup�re la requ�te
            $request = $this->getRequest();
            // On v�rifie qu'elle est de type POST
            if ($request->isXmlHttpRequest()) {
                // On fait le lien Requ�te <-> Formulaire
                $form->handleRequest($request);

                // On v�rifie que les valeurs entr�es sont correctes
                // (Nous verrons la validation des objets en d�tail dans le prochain chapitre)
                if ($form->isValid()) {
                    // On enregistre notre objet $article dans la base de donn�es
                    $em = $this->getDoctrine()->getManager();
                    $groupe->addDossier($dossier);
                    $em->persist($groupe);

                    $em->flush();



                    // On d�finit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'nouveau dossier créer');
                    // On redirige vers la page de visualisation de l'article nouvellement cr��
                    return $this->render('InnovGroupBundle:Group:listeDossiers.html.twig', array('dossiers' => $groupe->getDossiers()));
                }
            }
            // � ce stade :
            // - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
            // - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
            return $this->render('InnovGroupBundle:Group:formulaireDossier.html.twig', array('formDossier' => $form->createView(), 'groupe' => $groupe));
        }
    }

    public function creerSousDossierAction(Dossier $dossier) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }



        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $groupe = $dossier->getGroupe();


        $statutMembre = $repository->checkStatut($user, $groupe);

        if (!$statutMembre || $statutMembre->getStatut() === 0) {
            return $this->redirect($this->generateUrl('InnovGroup_vouloirRejoindreGroupe', array('id' => $groupe->getId())));
        } else {

            $sousDossier = new SousDossier();


            $form = $this->createForm(new SousDossierType, $sousDossier);

            // On r�cup�re la requ�te
            $request = $this->getRequest();
            // On v�rifie qu'elle est de type POST
            if ($request->isXmlHttpRequest()) {
                // On fait le lien Requ�te <-> Formulaire
                $form->handleRequest($request);

                // On v�rifie que les valeurs entr�es sont correctes
                // (Nous verrons la validation des objets en d�tail dans le prochain chapitre)
                if ($form->isValid()) {
                    // On enregistre notre objet $article dans la base de donn�es
                    $em = $this->getDoctrine()->getManager();

                    $examCollection = new ExamCollection();
                    $examCollection->setDescription($sousDossier->getNom() . ' ' . ' entrez vos examens ICI ! ');
                    $examCollection->setIntitule($sousDossier->getNom() . ' ' . ' entrez vos examens ICI ! ');

                    $essaiCollection = new EssaiCollection();
                    $essaiCollection->setDescription($sousDossier->getNom() . ' ' . ' entrez vos essais ICI ! ');

                    $correctionCollection = new CorrectionCollection();
                    $correctionCollection->setDescription($sousDossier->getNom() . ' ' . ' entrez les Corrections Officielles ICI ! ');
                    $correctionCollection->setIntitule($sousDossier->getNom() . ' ' . ' entrez les corrections officielles ICI ! ');
                    $sousDossier->addEssaiCollection($essaiCollection);

                    $sousDossier->setExamCollection($examCollection);
                    $sousDossier->setCorrectionCollection($correctionCollection);


                    $dossier->addSousDossier($sousDossier);

                    $em->persist($dossier);
                    $em->persist($sousDossier);
                    $em->persist($essaiCollection);
                    $em->persist($correctionCollection);
                    $em->persist($examCollection);

                    $em->flush();


                    // On d�finit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'nouveau sous dossier créer');
                    // On redirige vers la page de visualisation de l'article nouvellement cr��
                    return $this->render('InnovGroupBundle:Group:listeSousDossiers.html.twig', array('sousDossiers' => $dossier->getSousDossiers()));
                }
            }
            // � ce stade :
            // - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
            // - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
            return $this->render('InnovGroupBundle:Group:formulaireSousDossier.html.twig', array('formSousDossier' => $form->createView(), 'dossier' => $dossier, 'sousDossier' => $sousDossier));
        }
    }

    public function testAction(Request $request) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $upload_handler = new \UploadHandler();
        $em = $this->getDoctrine()->getManager();
        $fbody = $upload_handler->fbody;
        //$ffread = $upload_handler->ffread;
        $racine = "uploads/cliches/";

        $docInfoForm = $this->createFormBuilder(array())
                ->add('titre', 'text')
                ->add('description', 'textarea')
                ->add('tags', 'textarea')
                ->getForm();

        if (!isset($_FILES["files"])) {
            return $this->render('InnovGroupBundle:Group:test_backup.html.twig', array('form' => $docInfoForm->createView()));
        }


        $validation = true;
        foreach ($_FILES["files"]["error"] as $value) {
            if ($value != 0) {
                $validation = false;
                break;
            }
        }

        $docInfoForm->handleRequest($request);

        if ($validation && $docInfoForm->isValid()) {
            $fbody_array = json_decode($fbody, true);
            $doc = new Document();
            $docInfo = $docInfoForm->getData();
            $doc->setTitre($docInfo['titre']);
            $doc->setNom($docInfo['titre']);
            $doc->setDescription($docInfo['description']);
            $tags_str1 = $docInfo['tags'];

            $tags_str1 = explode(",", $tags_str1);
            foreach ($tags_str1 as $tag) {
                $result = $em->getRepository("InnovUserBundle:Tag")->findOneByText($tag);
                if (!$result) {
                    $result = new Tag();
                    $result->setText($tag);
                    $em->persist($result);
                }
                $doc->addTag($result);
                $em->persist($doc);
            };

            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();

            $sousDossierPersos = $user->getDossierPerso()->getSousDossiersPerso();
            $sousDossierPerso = $sousDossierPersos[0];
            $sousDossierPerso->addDocument($doc);

            // OUI OUI on a fait plusieurs flush pour des raisons valables de Foreign Key donc ne pas modifier
            $em->persist($doc);
            $em->persist($sousDossierPerso);
            $em->flush();
            foreach ($fbody_array['files'] as $value) {
                $ext = explode("/", $value['type']);
                $cliche = new Cliche();
                $cliche->setAlt($value['name']);
                $cliche->setUrl($ext[1]);
                $ext = "." . $ext[1];
                $doc->addClich($cliche);
                $em->persist($cliche);
                $em->persist($doc);
                $em->flush();
                rename($racine . $value['name'], $racine . $cliche->getId() . $ext);
                rename($racine . "thumbnail/" . $value['name'], $racine . "thumbnail/" . $cliche->getId() . $ext);
            }

            $id_solr = 'document_' . $doc->getId();
            $doc->setIdSolr($id_solr);
            $em->persist($doc);
            $em->flush();

            if( $this->testSolr())
               $this->indexerDansSolr($doc, $id_solr, 'document_');

            // Ici on donne les droits OWNER à ce user sur le 
            $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
        }
        return new Response($fbody);
    }

    public function test2Action(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $upload_handler = new \UploadHandler();
        $em = $this->getDoctrine()->getManager();
        $fbody = $upload_handler->fbody;
        //$ffread = $upload_handler->ffread;
        $racine = "uploads/cliches/";
        $request = $this->getRequest();

        $docInfoForm = $this->createFormBuilder(array())
                ->add('titre', 'text')
                ->add('description', 'textarea')
                ->add('tags', 'textarea')
                ->getForm();

        if (!isset($_FILES["files"])) {
            return $this->render('InnovGroupBundle:Group:test_backup.html.twig', array('form' => $docInfoForm->createView()));
        }


        $validation = true;
        foreach ($_FILES["files"]["error"] as $value) {
            if ($value != 0) {
                $validation = false;
                break;
            }
        }

        $docInfoForm->handleRequest($request);

        if ($validation && $docInfoForm->isValid()) {
            $fbody_array = json_decode($fbody, true);
            $doc = new ExamCollection();
            $docInfo = $docInfoForm->getData();
            $doc->setGroupe($groupe);
            $doc->setTitre($docInfo['titre']);
            $doc->setIntitule($docInfo['titre']);
            
            $doc->setDescription($docInfo['description']);
            
                       
            $tags_str1 = $docInfo['tags'];

            $tags_str1 = explode(",", $tags_str1);
            foreach ($tags_str1 as $tag) {
                $result = $em->getRepository("InnovUserBundle:Tag")->findOneByText($tag);
                if (!$result) {
                    $result = new Tag();
                    $result->setText($tag);
                    $em->persist($result);
                }
                $doc->addTag($result);
                $em->persist($doc);
            }

            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();

            $user->addMesExamCollection($doc);


            // OUI OUI on a fait plusieurs flush pour des raisons valables de Foreign Key donc ne pas modifier
            $em->flush();

            foreach ($fbody_array['files'] as $value) {
                $ext = explode("/", $value['type']);
                $cliche = new Cliche();
                $cliche->setAlt($value['name']);
                $cliche->setUrl($ext[1]);
                $ext = "." . $ext[1];
                $doc->addClich($cliche);
                $em->persist($cliche);
                $em->flush();
                rename($racine . $value['name'], $racine . $cliche->getId() . $ext);
                rename($racine . "thumbnail/" . $value['name'], $racine . "thumbnail/" . $cliche->getId() . $ext);
            }

            $id_solr = 'examCo_' . $doc->getId();
            $doc->setIdSolr($id_solr);
            $em->persist($doc);
            $em->flush();

            // A partir d'ici on indexe le document dans SOLR
           if( $this->testSolr())
               $this->indexerDansSolr($doc, $id_solr, 'examCo_', $groupe->getId());

            // Ici on donne le  droit OWNER a ce user sur le docuument
            $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
        }
        return new Response($fbody);
    }

    public function test3Action(ExamCollection $exCo) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $upload_handler = new \UploadHandler();
        $em = $this->getDoctrine()->getManager();
        $fbody = $upload_handler->fbody;
        //$ffread = $upload_handler->ffread;
        $racine = "uploads/cliches/";
        $request = $this->getRequest();

        $docInfoForm = $this->createFormBuilder(array())
                ->add('titre', 'text')
                ->add('description', 'textarea')
                ->add('tags', 'textarea')
                ->getForm();

        if (!isset($_FILES["files"])) {
            return $this->render('InnovGroupBundle:Group:test_backup.html.twig', array('form' => $docInfoForm->createView()));
        }


        $validation = true;
        foreach ($_FILES["files"]["error"] as $value) {
            if ($value != 0) {
                $validation = false;
                break;
            }
        }

        $docInfoForm->handleRequest($request);

        if ($validation && $docInfoForm->isValid()) {
            $fbody_array = json_decode($fbody, true);
            $doc = new EssaiCollection();
            $docInfo = $docInfoForm->getData();
            $exCo->addEssaisCollection($doc);
            $doc->setTitre($docInfo['titre']);
            $doc->setDescription($docInfo['description']);
            
            
            $tags_str1 = $docInfo['tags'];

            $tags_str1 = explode(",", $tags_str1);
            foreach ($tags_str1 as $tag) {
                $result = $em->getRepository("InnovUserBundle:Tag")->findOneByText($tag);
                if (!$result) {
                    $result = new Tag();
                    $result->setText($tag);
                    $em->persist($result);
                }
                $doc->addTag($result);
                $em->persist($doc);
                $em->persist($exCo);
                $em->flush();
            }


            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();

            $user->addMesEssaisCollection($doc);
            $em->persist($user);
            $em->persist($doc);


            // OUI OUI on a fait plusieurs flush pour des raisons valables de Foreign Key donc ne pas modifier
            $em->flush();

            foreach ($fbody_array['files'] as $value) {
                $ext = explode("/", $value['type']);
                $cliche = new Cliche();
                $cliche->setAlt($value['name']);
                $cliche->setUrl($ext[1]);
                $ext = "." . $ext[1];
                $doc->addClich($cliche);
                $em->persist($cliche);
                $em->flush();
                rename($racine . $value['name'], $racine . $cliche->getId() . $ext);
                rename($racine . "thumbnail/" . $value['name'], $racine . "thumbnail/" . $cliche->getId() . $ext);
            }

// ANCIENNE MANIERE DE FAIRE L'UPDATE
//            $tags_str = "";
//            foreach ($doc->getTags() as $tag)
//                $tags_str = $tags_str . ' ' . $tag->getText();
//
//            $essai_co = $doc->getTitre() . '  ' . $doc->getDescription() . ' ' . $tags_str;
//
//
//            include('httpful.phar');
//
//            // And you're ready to go!
//            $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
//                    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
//                    ->body('[{"id":"' . $exCo->getIdSolr() . '", "essai_co":{"add":"' . $essai_co . '"}}]')             // attach a body/payload...
//                    ->send();
            // NOUVELLE MANIERE DE FAIRE L'UPDATE

            if( $this->testSolr())
                $this->updateDansSolr($exCo);

            // Ici on donne le  droit OWNER a ce user sur le docuument
            $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
        }
        return new Response($fbody);
    }

    public function getTagsAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository("InnovUserBundle:Tag")->findAll();

        $tags_names = array();
        foreach ($tags as $tag)
            $tags_names[] = $tag->getText();

        return new Response(\json_encode($tags_names));
    }

    public function creerSousDossierPersoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }



        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $sousDossierPerso = new SousDossierPerso();
        $sousDossierPerso->setNom($_POST['sousDP']);

        $dossierPerso = $user->getDossierPerso();
        $dossierPerso->addSousDossiersPerso($sousDossierPerso);
        $em = $this->getDoctrine()->getManager();

        $em->persist($dossierPerso);
        $em->flush();

        return $this->render('InnovGroupBundle:Group:EspacePerso.html.twig');
    }

    public function renderJsTreeAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        return $this->render('InnovGroupBundle:Group:EspacePerso.html.twig');
    }

    public function partagerExCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();


        $id_document = $_POST['id_node'];
        $id_document = intval($id_document);

        $id_groupe = $_POST['id_groupe'];
        $id_groupe = intVal($id_groupe);

        $doc = $em->getRepository('InnovUserBundle:Document')->find($id_document);
        $groupe = $em->getRepository('InnovGroupBundle:Groupe')->find($id_groupe);

        $examCo = new ExamCollection();
        $examCo->setIntitule($doc->getNom());
        $examCo->setTitre($doc->getTitre());
        $examCo->setIdSolr("");
        $examCo->setGroupe($groupe);
        $user->addMesExamCollection($examCo);
        $examCo->setDescription($doc->getDescription());
        foreach ($doc->getCliches() as $cliche)
            $examCo->addClich($cliche);
        foreach ($doc->getTags() as $tag)
            $examCo->addTag($tag);
        $em->persist($user);
        $em->persist($examCo);
        $em->flush();
        $examCo->setIdSolr('examCo_' . $examCo->getId());
        $em->flush();

       if( $this->testSolr())
            $this->indexerDansSolr($examCo, 'examCo_' . $examCo->getId(), 'examCo_', $groupe->getId());

        // Ici on donne le  droit OWNER a ce user sur le docuument
        $this->gestionDroitACL($examCo, MaskBuilder::MASK_OWNER);

        $examCos = $groupe->getExamCollections()->toArray();

        // on le renvoie à la dernière page de paginations pour qu'il puisse voir ce qu'il a ajouter
        $nbre_examCos = sizeof($examCos);
        $offset = floor($nbre_examCos / $this->pagination_size);

        $examCos = array_slice($examCos, $offset*$this->pagination_size, $this->pagination_size-1);

        return $this->render('InnovGroupBundle:Group:listeExamCollection.html.twig', array('examCollections' => $examCos));

    }

    public function partagerEssaiCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();


        $id_document = $_POST['id_node'];
        $id_document = intval($id_document);

        $id_exCo = $_POST['id_ExamCollection'];
        $id_exCo = explode('_', $id_exCo);
        $id_exCo = intVal($id_exCo[1]);

        $doc = $em->getRepository('InnovUserBundle:Document')->find($id_document);
        $examCo = $em->getRepository('InnovGroupBundle:ExamCollection')->find($id_exCo);

        $essaiCo = new EssaiCollection();
        $essaiCo->setTitre($doc->getTitre());
//        $essaiCo->setIdSolr("");
        $examCo->addEssaisCollection($essaiCo);
        $user->addMesEssaisCollection($essaiCo);
        $essaiCo->setDescription($doc->getDescription());
        foreach ($doc->getCliches() as $cliche)
            $essaiCo->addClich($cliche);
        foreach ($doc->getTags() as $tag)
            $essaiCo->addTag($tag);
        $em->persist($user);
        $em->persist($essaiCo);
        $em->persist($examCo);
        $em->flush();

//        // on construit la chaine de caractère associée à cette essaiCo ajouter à l'examCo correspondant  dans SOLR
//        $essai_co = $essaiCo->getDescription() . '  ' . $essaiCo->getTitre();
//        foreach ($examCo->getTags() as $tag)
//            $essai_co . ' ' . $tag->getText();
//
//        include('httpful.phar');
//
//        // And you're ready to go!
//        $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
//                ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
//                ->body('[{"id":"' . $examCo->getIdSolr() . '", "essai_co":{"add":"' . $essai_co . '"}}]')             // attach a body/payload...
//                ->send();
        if( $this->testSolr())
            $this->updateDansSolr($examCo);

        // Ici on donne le  droit OWNER a ce user sur le docuument
        $this->gestionDroitACL($essaiCo, MaskBuilder::MASK_OWNER);

        return $this->render('InnovGroupBundle:Group:listeEssaiCollection.html.twig', array('examCo' => $examCo));
    }

    public function switcherAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }



        $userManager = $this->container->get('fos_user.user_manager');
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();


        $id_nouveauParent = $_POST['id_nouveauParent'];
        $id_nouveauParent = explode('_', $id_nouveauParent);
        $id_nouveauSousDossier = intval($id_nouveauParent[1]);

        $id_ancienSousDossier = $_POST['id_ancienParent'];
        $id_ancienSousDossier = explode('_', $id_ancienSousDossier);
        $id_ancienSousDossier = intval($id_ancienSousDossier[1]);

        $id_document = $_POST['id_node'];
        $id_document = explode('_', $id_document);
        $id_document = intval($id_document[1]);

        $ancien_sousDossier = $em->getRepository('InnovUserBundle:SousDossierPerso')->find($id_ancienSousDossier);
        $nouveau_sousDossier = $em->getRepository('InnovUserBundle:SousDossierPerso')->find($id_nouveauSousDossier);
        $document = $em->getRepository('InnovUserBundle:Document')->find($id_document);

        // $ancien_sousDossier->removeDocument($document);
        $nouveau_sousDossier->addDocument($document);
        $em->flush();

        return new Response("blabla");
    }

    public function addExamCollectionAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $examCollection = new ExamCollection();
        $userManager = $this->container->get('fos_user.user_manager');
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        $form = $this->createForm(new ExamCollectionType, $examCollection);


        // On r�cup�re la requ�te
        $request = $this->getRequest();
        // On v�rifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requ�te <-> Formulaire
            $form->handleRequest($request);

            // On v�rifie que les valeurs entr�es sont correctes
            // (Nous verrons la validation des objets en d�tail dans le prochain chapitre)
            if ($form->isValid()) {
                // On enregistre notre objet $article dans la base de donn�es
                $em = $this->getDoctrine()->getManager();
                $examCollection = $form->getData();

                $exams = $examCollection->getExams();
                $fichiers = array();
                foreach ($exams as $key => $exam) {
                    $exam->setExamCollection($examCollection);
                    // action à faire pre-persist
                    $exam->url = $exam->file->guessExtension();
                    $exam->alt = $exam->file->getClientOriginalName();
                    $fichiers[] = $exam->file;
                    //persist
                    $em->persist($exam);
                    // action à faire post-persist
                    //$exam->file->move($exam->getUploadRootDir(), $idE.'.'.$exam->url);
                }
                $em->persist($examCollection);
                $em->flush();

                $i = 0;
                foreach ($exams as $key => $exam) {
                    $fichiers[$i]->move($exam->getUploadRootDir(), $exam->getId() . '.' . $exam->url);
                    $i++;
                }

                $ex = new Exam();
                $ex->url = $fichiers[$i - 1]->guessExtension();
                $ex->alt = $fichiers[$i - 1]->getClientOriginalName();
                $ex->file = $fichiers[$i - 1];
                $fi = $fichiers[$i - 1];

                $ex->setExamCollection($examCollection);
                $em->persist($ex);
                $em->flush();
                $ex->file->move($fi->getUploadRootDir(), $ex->getId() . '.' . $ex->url);

                // On d�finit un message flash
                $this->get('session')->getFlashBag()->add('info', 'nouveau groupe créer');
                // On redirige vers la page de visualisation de l'article nouvellement cr��
                return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array("id" => $groupe->getId())));
            }
        }
        // � ce stade :
        // - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('InnovGroupBundle:Group:uploadFileForm.html.twig', array('form' => $form->createView(), 'groupe' => $groupe));
    }

    /*
      public function aajoutMembreAction(Groupe $groupe) {
      $request = $this->getRequest();

      // On v�rifie qu'elle est de type POST
      if ($request->getMethod() == 'POST') {

      $securityContext = $this->get('security.context');
      $user = $securityContext->getToken()->getUser();

      // On r�cup�re la requ�te
      $em = $this->getDoctrine()->getManager();
      $repo = $em->getRepository('InnovUserBundle:User');

      $bag = $request->request;
      $data = $bag->all();
      // ATTENTION SI ON CHANGE LE NOM DE L'ENTITE GROUPE FAUT MODIFIER CETTE LIGNE EN CONSEQUENCE
      $membres_idStr = $data['innov_groupbundle_ajout']['membres'];
      $membres = array();
      foreach ($membres_idStr as $idStr)
      $membres[] = $repo->find(intVal($idStr));

      foreach ($membres as $membre) {

      // on ajoute le membre au groupe
      $groupe->addMembre($membre);
      $em->persist($groupe);

      // on definit le statut du membre
      $groupeMembre = new GroupMembre();
      $groupeMembre->setGroupe($groupe);
      $groupeMembre->setUser($membre);
      $groupeMembre->setStatut(1);

      $em->persist($groupeMembre);

      // on envoie des notifications  a l'utilisateur pour lui dire qu'il viens d'être rajouter à un groupe

      $notif = new Notification();
      $notif->setAuteurNotif($user);
      $notif->setGroupeNotif($groupe);
      $notif->setContenu('vous a ajouter au groupe ');
      $notif->setDestinataireNotif($membre);
      $em->persist($membre);

      $em->flush();
      }
      // On d�finit un message flash
      $this->get('session')->getFlashBag()->add('info', 'nouveau groupe créer');
      // On redirige vers la page de visualisation de l'article nouvellement cr��
      return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array('id' => $groupe->getId())));
      }
      }
     */

    public function creerGroupeAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $groupe = new Groupe();
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        $form = $this->createForm(new GroupeType($user), $groupe);

        // On r�cup�re la requ�te
        $request = $this->getRequest();
        // On v�rifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requ�te <-> Formulaire
            $form->handleRequest($request);

            // On v�rifie que les valeurs entr�es sont correctes
            // (Nous verrons la validation des objets en d�tail dans le prochain chapitre)
            if ($form->isValid()) {
                // On enregistre notre objet $article dans la base de donn�es
                $em = $this->getDoctrine()->getManager();
                $groupe->addMembre($user);
                $em->persist($groupe);
                $em->flush();
                $groupe->setIdSolr('groupe_' . $groupe->getId());
                $em->flush();

                // on indexe le groupe dans SOLR pour être capable de rechercher et rejoindre des groupe
                if($this->testSolr())
                     $this->indexerGroupSolr($groupe);
                
                $membres = $groupe->getMembres();

                foreach ($membres as $membre) {
                    // on definit le statut du membre  
                    $groupeMembre = new GroupMembre();
                    $groupeMembre->setGroupe($groupe);
                    $groupeMembre->setUser($membre);
                    $groupeMembre->setStatut(1);
                    if ($membre->getId() == $user->getId())
                        $groupeMembre->setStatut(2); // statut 2 = statut admin
                    $em->persist($groupeMembre);

                    // on envoie des notifications  a l'utilisateur pour lui dire qu'il viens d'être rajouter à un groupe
                    if ($membre->getId() != $user->getId()) {
                        $notif = new Notification();
                        $notif->setAuteurNotif($user);
                        $notif->setGroupeNotif($groupe);
                        $notif->setContenu($this->notif_vous_a_ajouter);
                        $notif->setTypeNotif($this->type_notif_vous_a_ajouter);
                        $notif->setDestinataireNotif($membre);
                        $em->persist($membre);
                    }
                    $em->flush();
                }

                // On d�finit un message flash
                $this->get('session')->getFlashBag()->add('info', 'nouveau groupe créer');
                // On redirige vers la page de visualisation de l'article nouvellement cr��
                return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array('id' => $groupe->getId())));
            }
        }
        // � ce stade :
        // - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
        // - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
        return $this->render('InnovGroupBundle:Group:creerGroupe_modal.html.twig', array('form' => $form->createView(),));
    }

    public function solrSearchAction($query, $sort_mode = 'default', $offset=1) {




        $em = $this->getDoctrine()->getManager();

        $requestModelerType = new SearchTextType();
        $requestModeler = new SearchText();
        $form = $this->createForm($requestModelerType, $requestModeler);
        $form->handleRequest($this->getRequest());

        $searchText = $query;

        if ($this->getRequest()->getMethod() == 'POST' || $query != '_a_a_a_a_') {
            if (!$this->testSolr())
                return $this->redirect($this->generateUrl('InnovGroup_index'));

           

            $repoDoc = $em->getRepository("InnovUserBundle:Document");
            $repoExCo = $em->getRepository('InnovGroupBundle:ExamCollection');

            // create a client instance
            $client = $this->container->get('solarium.client');

            $query = $client->createSelect();

           
            $query->setStart(0)->setRows(2000);
          $query->setQueryDefaultOperator("AND");

            //  si le user veux avoir les documents les plus recents
            if ($sort_mode == 'plus_recent') {
                $query->addSort('date_ajout', 'desc');
                $query->addSort('nbre_vue', 'desc');
                $query->addSort('nbre_jaime', 'desc');
                $query->addSort('nbre_fois_favoris', 'desc');
            }

            // si le user veux avoir les documents les plus populaires
            if ($sort_mode == 'populaire') {
                $query->addSort('nbre_vue', 'desc');
                $query->addSort('nbre_jaime', 'desc');
                $query->addSort('nbre_fois_favoris', 'desc');
            }

            // si le user veut par pertinence ( valeur par default ) alors les if precendents ne seront
            // pas pris en compte ce qui sera pris en compte c'est tous ce qui suit
            // on utilise le dismax parser pour avoir droits à tous les avantages qu'il confère
            $dismax = $query->getDisMax();

            // pour que les requetes avec trop de mots clés renvoient aussi des results
            $dismax->setMinimumMatch('2<55%');
            // on definit le boosting de chaque champ
            $dismax->setQueryFields("contenu_ocr^4.0 titre^2.0 titre_search^2.0 description^1.6 commentaires^1.1 tags^1.5 essai_co^3.0");
            // on definit le boosting dans le cas ou il trouve un match phrase
            $dismax->setPhraseFields("contenu_ocr^5.0 titre^2.5 titre_search^2.5");
            // on definit le boosting pour améliorer le classement des documents les plus populaires, les plus vues, les plus aimes
            $dismax->setBoostFunctions("product(nbre_vue)^3.0  product(nbre_jaime)^4.0 product(nbre_fois_favoris)^5.5  ");
            // add a query and morelikethis settings (using fluent interface)
            
            // ce petit test c'est pour gérer les reqûetes avec exactement 2 mots clés
            // étant donné que 2 c'est le treshold qui a été fixé
            // si nbre_mots_clés = 2 on rajoute un troisième pour réger le problème du minimumMatch fixé à 2

            $nbre_mots_cles = explode($searchText);

            if( sizeof($nbre_mots_cles) == 2)
                 $query->setQuery($searchText.'  '.$searchText);
             else
                 $query->setQuery($searchText);
                /*    ->getMoreLikeThis()
                    ->setFields('tags, essai_co, contenu_ocr, description') // les champs utilise par mlt pour definir la similarite entre 2 documents
                    ->setQueryFields("contenu_ocr^4.0 description^1.6 essai_co^3.0 tags1.5") // on specifie l'ordre dans lequel les similaires doivent etre classe grace au boosting
                    ->setMinimumDocumentFrequency(1)
                    ->setMinimumTermFrequency(1)
                    ->setMinimumWordLength(3)
                    ->setBoost(true)
                    ->setCount(150); */// on specitife le nbre de document similaires max à renvoyer
            
//            $hl = $query->getHighlighting();
//            $hl->setFields('tags,titre, description, essai_co');
//            $hl->setSimplePrefix('<b>');
//            $hl->setSimplePostfix('</b>');
//            $hl->setUsefastvectorhighlighter(true);
//            $hl->setUsephrasehighlighter(true);
//            $hl->setRequirefieldmatch  (false);
//            $hl->setRegexpattern(' ');
            // this executes the query and returns the result
            $resultset = $client->select($query);
            $mlt = $resultset->getMoreLikeThis();

            // $highlighting = $resultset->getHighlighting();
            $docs = array();
            $similaires = array();

            foreach ($resultset as $document) {
                if ($document['object'] == 'document_') {
                    $doc = $repoDoc->find($document['id_object']);
                    if ($doc)
                        $docs[] = $doc;
                }
                else {
                    $doc = $repoExCo->find($document['id_object']);
                    if ($doc)
                        $docs[] = $doc;
                }

                if($doc)
                    $similaires[$doc->getIdSolr()] = array();

                /*if ($doc) {
                    $mltResult = $mlt->getResult($document->id);
                    if ($mltResult) {
                        $similaires[$document['id']] = array();
                        foreach ($mltResult as $mltDoc) {
                            $mlt_id = $mltDoc->id;
                            $mlt_idStr = explode('_', $mlt_id);
                            if ($mlt_idStr[0] == 'document') {
                                $sim = $repoDoc->find(intVal($mlt_idStr[1]));
                                if ($sim)
                                    $similaires[$document['id']][] = $sim;
                            }
                            else {
                                $sim = $repoExCo->find(intVal($mlt_idStr[1]));
                                if ($sim)
                                    $similaires[$document['id']][] = $sim;
                            }
                        }
                    } else {
                        $similaires[$document['id']] = array(); // on rajoute cette ligne pour que les 2 tableaux similaires et documents aient la même taille
                    }
                } */
            }
            $requestModeler->setQuery($searchText);
            $form = $this->createForm($requestModelerType, $requestModeler);

            $form->handleRequest($this->getRequest());
            
            $nbre_docs = sizeof($docs);
           
            // on journalise la requete du user  si le nbre de resultat > 2
            if ($nbre_docs >= 3) {
                $this->journaliserRequete($searchText);
            }

            $offset = ($offset < 1)? 1 : $offset;
             $docs = array_slice($docs, ($offset-1) * $this->pagination_size, $this->pagination_size-1);
             $similaires = array_slice($similaires, ($offset-1) * $this->pagination_size, $this->pagination_size-1);

            return $this->render('InnovGroupBundle:Group:resultatRecherche.html.twig', array('docs' => $docs, 'similaires' => $similaires, 'offset'=>$offset, 'nbre_docs'=> $nbre_docs, 'searchText' => $searchText, 'form' => $form->createView()));
        }

        return $this->render('InnovGroupBundle:Group:formulaireRecherche.html.twig', array('form' => $form->createView()));
    }

    public function solrSearch2Action() {


        if ($this->getRequest()->isMethod('POST')) {

            if (!$this->testSolr())
                return $this->redirect($this->generateUrl('InnovGroup_index'));

            $requestModelerType = new SearchTextType();
            $requestModeler = new SearchText();
            $form = $this->createForm($requestModelerType, $requestModeler);
            $form->handleRequest($this->getRequest());

            $requestModeler = $form->getData();
            $searchText = $requestModeler->getQuery();


            return $this->redirect($this->generateUrl('InnovGroup_solrSearch', array('query' => $searchText)));
        }

        return $this->redirect($this->generateUrl('InnovGroup_solrSearch', array('query' => '*')));
    }

    public function ajoutMembreAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $repoGroupeMembre = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $membres = $groupe->getMembres();
        $membres_ids = array();
        foreach ($membres as $membre)
            $membres_ids[] = $membre->getId();
        $form = $this->createForm(new AjoutMembreType($membres_ids), $groupe);


        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {

            $em = $this->getDoctrine()->getManager();
            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();
            $repo = $em->getRepository('InnovUserBundle:User');
            $bag = $request->request;
            $data = $bag->all();
            // ATTENTION SI ON CHANGE LE NOM DE L'ENTITE GROUPE FAUT MODIFIER CETTE LIGNE EN CONSEQUENCE
            $membres_idStr = $data['innov_groupbundle_ajout']['membres'];
            $membres = array();
            foreach ($membres_idStr as $idStr)
                $membres[] = $repo->find(intVal($idStr));
            foreach ($membres as $membre) {

                $groupe->addMembre($membre);
                // on definit le statut du membre  
                $groupeMembre = new GroupMembre();
                $groupeMembre->setGroupe($groupe);
                $groupeMembre->setUser($membre);
                // on verifie aussi si le user avait déjà demander à rejoindre le groupe on ne
                // doit plus créer une nouvelle entité on doit juste changer son statut
                $checkGroupeMembre = $repoGroupeMembre->checkStatut($membre, $groupe);
                if ($checkGroupeMembre)
                    $groupeMembre = $checkGroupeMembre;
                $groupeMembre->setStatut(1);

                $em->persist($groupeMembre);

                // on envoie des notifications  a l'utilisateur pour lui dire qu'il viens d'être rajouter à un groupe

                $notif = new Notification();
                $notif->setAuteurNotif($user);
                $notif->setGroupeNotif($groupe);
                $notif->setContenu($this->notif_vous_a_ajouter);
                $notif->setTypeNotif($this->type_notif_vous_a_ajouter);
                $notif->setDestinataireNotif($membre);
                $em->persist($membre);

                $em->flush();
            }



            return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array('id' => $groupe->getId())));
        }

        return $this->render('InnovGroupBundle:Group:formulaireAjoutMembre.html.twig', array('form' => $form->createView(), 'groupe' => $groupe));
    }

    public function entrerGroupeAction(Groupe $groupe) {

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');
        
        
        $repoExco =  $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:ExamCollection');

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        $statutMembre = $repository->checkStatut($user, $groupe);

        if (!$statutMembre || $statutMembre->getStatut() === 0) {
            return $this->redirect($this->generateUrl('InnovGroup_vouloirRejoindreGroupe', array('id' => $groupe->getId())));
        } else {
            $examCollectionsAll = $groupe->getExamCollections()->toArray();
            $examCollections = array_slice($examCollectionsAll , 0, $this->pagination_size -1);
            

            return $this->render('InnovGroupBundle:Group:entrerGroupe.html.twig', array('groupe' => $groupe, 'examCollections' => $examCollections, 'offset'=> 1));
        }
    }

     public function entrerGroupe2Action($id_groupe, $offset) {

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');
        
        $repoGroupe = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:Groupe');
        
        
        $repoExco =  $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:ExamCollection');
        
        $groupe = $repoGroupe->find($id_groupe);
        
        if (!$groupe) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        $statutMembre = $repository->checkStatut($user, $groupe);

        if (!$statutMembre || $statutMembre->getStatut() === 0) {
            return $this->redirect($this->generateUrl('InnovGroup_vouloirRejoindreGroupe', array('id' => $groupe->getId())));
        } else {
            $offset = ( $offset < 1) ? 1: $offset;
            $examCollectionsAll = $groupe->getExamCollections()->toArray();
            $examCollections = array_slice($examCollectionsAll , ($offset-1)*$this->pagination_size, $this->pagination_size-1);
            

            return $this->render('InnovGroupBundle:Group:entrerGroupe.html.twig', array('groupe' => $groupe, 'examCollections' => $examCollections, 'offset'=>$offset));
        }
    }
    
    
    public function vouloirRejoindreGroupeAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        // check si le user a déjà envoyer une demande à rejoindre le groupe
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $statutMembre = $repository->checkStatut($user, $groupe);
        // si c'est le cas on le redirige vers cette route qui gère déjà ce cas là ; donc plus la eine de le refaire ici
        if ($statutMembre && $statutMembre->getStatut() == 0)
            return $this->redirect($this->generateUrl('InnovGroup_demandeRejoindreGroupe', array('id' => $groupe->getId())));


        $data = array();
        $form = $this->createFormBuilder($data)
                ->add('choix', 'choice', array(
                    'choices' => array('o' => 'OUI', 'n' => 'NON'),
                    'required' => false,
                ))
                ->getForm();
        $request = $this->getRequest();

        if ($request->isMethod('POST')) {
            $form->bind($request);

            $data = $form->getData();
            $choix = $data['choix'];

            if ($choix == 'o')
                return $this->redirect($this->generateUrl('InnovGroup_demandeRejoindreGroupe', array('id' => $groupe->getId())));

            else
                return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        return $this->render('InnovGroupBundle:Group:vouloirRejoindreGroupe.html.twig', array('groupe' => $groupe, 'formVouloirRejoindre' => $form->createView()));
    }

    public function entrerDossierAction(Dossier $dossier) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $groupe = $dossier->getGroupe();


        $statutMembre = $repository->checkStatut($user, $groupe);

        if (!$statutMembre || $statutMembre->getStatut() === 0) {
            return $this->redirect($this->generateUrl('InnovGroup_vouloirRejoindreGroupe', array('id' => $groupe->getId())));
        } else {
            return $this->render('InnovGroupBundle:Group:entrerDossier.html.twig', array('dossier' => $dossier, 'groupe' => $groupe));
        }
    }

    public function demandeRejoindreGroupeAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $em = $this->getDoctrine()->getManager();
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();
        // check s'il n'appartient pas encore au groupe

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovGroupBundle:GroupMembre');

        $statutMembre = $repository->checkStatut($user, $groupe);

        // dans la vue elle servira à savoir si le user a déjà envoyé une demande ou non
        $booleen = false;

        // on teste si le user n'a jamais envoyé sa demande à rejoindre le groupe
        if (!$statutMembre) {
            foreach ($groupe->getMembres() as $membre) {
                $notif = new Notification();
                $notif->setAuteurNotif($user);
                $notif->setGroupeNotif($groupe);
                $notif->setContenu($this->notif_demande_rejoindre);
                $notif->setTypeNotif($this->type_notif_demande_rejoindre);
                $notif->setDestinataireNotif($membre);
                $em->persist($membre);
            }

            // on insère dans la table groupMembre le statut 0 qui veut dire qu'il a déjà envoyé la demande de rejoindre le groupe
            $groupMembre = new GroupMembre();
            $groupMembre->setGroupe($groupe);
            $groupMembre->setUser($user);
            $groupMembre->setStatut(0);
            $em->persist($groupMembre);

            $em->flush();
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        } else {
            // on teste s'il est déjà membre du groupe c'est à dire statut = 1 ou 2
            if ($statutMembre->getStatut() >= 1) {
                return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array('id' => $groupe->getId())));
            } else {
                $booleen = true;
                return $this->render('InnovGroupBundle:Group:demandeRejoindreGroupe.html.twig', array('groupe' => $groupe, 'booleen' => $booleen));
            }
        }
    }

    /**
     * @ParamConverter("user", options={"mapping": {"user_id": "id"}})
     * @ParamConverter("groupe", options={"mapping": {"groupe_id": "id"}})
     */
    public function accepterDemandeAction(User $user, Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('InnovGroupBundle:GroupMembre');

        $securityContext = $this->get('security.context');
        $userActuel = $securityContext->getToken()->getUser();
        $statutUserActuel = $repository->checkStatut($userActuel, $groupe);


        // on a le droit d'ajouter un nouveau membre que si l'on est soit même
        // déjà un membre du groupe
        if ($statutUserActuel && $statutUserActuel->getStatut() > 0) {
            $statutMembre = $repository->checkStatut($user, $groupe);
            if ($statutMembre->getStatut() == 0) {
                $groupe->addMembre($user);
                $statutMembre->setStatut(1); // statut 1 veut dire qu'il  est désormais membres du groupe
                $em->persist($groupe);
                $em->persist($statutMembre);
                
                // on lui envoie une notification 
                $notif = new Notification();
                $notif->setAuteurNotif($userActuel);
                $notif->setGroupeNotif($groupe);
                $notif->setContenu($this->notif_accepter_demande);
                $notif->setTypeNotif($this->type_notif_accepter_demande);
                $notif->setDestinataireNotif($user);
                $em->persist($user);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('InnovGroup_entrerGroupe', array('id' => $groupe->getId())));
    }

    public function rechercheAutoCompleteAction(Request $request) {
        $query = $request->request->get('query');
        return new Response('[ { "id": "1", "text": "Adne"}, { "id": "2", "text": "Junior"}, { "id": "3", "text": "Kadiri"}, { "id": "4", "text": "Chtaibi"} ]');
    }

    public function visionnerDocAction() {

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $em = $this->getDoctrine()->getManager();

        $idDocument = intVal($_POST['id']);
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('InnovUserBundle:Document');

        $document = $repository->find($idDocument);
        $cliches = $document->getCliches();

        // increment le nbre de Vue
        $document->setNbreVue($document->getNbreVue() + 1);
        $em->persist($document);
        $em->flush();

        if($this->testSolr())
        {
            // on ne fait l'update dans solr que si nbreVue%4 = 0
            if( ($document->getNbreVue()% 5 ) == 0)
                $this->updateDansSolr($document);
        }



        $href_all = "";
        $href = "";
        foreach ($cliches as $cliche) {
            $href = "/web/" . $cliche->getUploadDir() . "/" . strval($cliche->getId()) . "." . $cliche->getUrl();
            $href_all = $href_all . '{"href":"' . $href . '"}**--**';
        }

        return new Response($href_all);
    }

    public function visionnerExCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $securityContext = $this->get('security.context');
        $idExCo = intVal($_POST['id']);
        $em = $this->getDoctrine()
                ->getManager();
        $repository = $em
                ->getRepository('InnovGroupBundle:ExamCollection');

        $examCo = $repository->find($idExCo);
        $cliches = $examCo->getCliches();
        $id = $examCo->getId();

        // on incremente  le nbre de vue

        $examCo->setNbreVue($examCo->getNbreVue() + 1);
        $em->persist($examCo);
        $em->flush();

        if($this->testSolr())
        {
            if(  ($examCo->getNbreVue() % 5 ) == 0)
                 $this->updateDansSolr($examCo);
        }


        $href_all = "";
        $href = "";
        $commentaire1 = "<section class='panel' id='exaCo_$id'> <header class='panel-heading'> </header> <div class='panel-body'><div class='chat-form' style='margin-top:0px;margin-bottom:25px;'> <div class='input-cont '> <input type='text' style='color:#000000;' id='inputCo' class='form-control col-lg-5'  placeholder='Ecrire un Commentaire...'/> </div> <div class='form-group' style='display:none;'> <div class='pull-right chat-features'> <a href='javascript:;'> <i class='icon-camera'></i> </a> <a href='javascript:;'> <i class='icon-link'></i> </a> <a class='commenter' id='$id' href='javascript:;'>Commenter</a> </div> </div> </div><div class='timeline-messages' id='messageAppend'>";
        $commentaire2 = "";
        $commentaire3 = "</div> </div> </section>";
        
        foreach ($examCo->getCommentaires() as $comment) {
            $nom = $comment->getAuteur()->getNom() . '  ' . $comment->getAuteur()->getPrenom();
            $date = $comment->getDate();
            $date = \date_format($date, 'Y-m-d H:i:s');
            $contenu = $comment->getContenu();
            $photo = $comment->getAuteur()->getPhoto();
            $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
            $idComment = $comment->getId();
            if (false === $securityContext->isGranted('DELETE', $comment)) {
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p></div></div></div>";
            } else {
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p> <p><a class='poubelle' id='delete_$idComment' href='#'> <i  class='icon-trash'> </i> </p></a></div></div></div>";
            }
        }

        $commentaireAll = $commentaire1 . $commentaire2 . $commentaire3;
        foreach ($cliches as $cliche) {
            $href = "/web/" . $cliche->getUploadDir() . "/" . strval($cliche->getId()) . "." . $cliche->getUrl();
            $href_all = $href_all . '{"href":"' . $href . '" , "title":"' . $commentaireAll . '"}**--**';
        }

        return new Response($href_all);
    }

    public function visionnerPublicAction() {
        $idComplet = $_POST['id'];
        $typeAndIds = explode('__', $idComplet);

        
        if ($typeAndIds[0] == 'visionPublicExCo')
            return $this->redirect($this->generateUrl('InnovGroup_visionnerPublicExCo', array('idComplet' => $typeAndIds[1])));

        if ($typeAndIds[0] == 'visionPublicDoc')
            return $this->redirect($this->generateUrl('InnovGroup_visionnerPublicDoc', array('idComplet' => $typeAndIds[1])));
    }

    public function visionnerPublicDocAction($idComplet) {

        $ids = explode('*', $idComplet);
        $em = $this->getDoctrine()->getManager();
        $repoExCo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $repoDoc = $em->getRepository('InnovUserBundle:Document');
        $repoUser = $em->getRepository('InnovUserBundle:User');
        $doc = $repoDoc->find(intVal($ids[0]));

        // inc le nbre de vue
        $doc->setNbreVue($doc->getNbreVue() + 1);
        $em->flush();

        if($this->testSolr())
        {
            if( ($doc->getNbreVue() % 5 ) == 0)
                $this->updateDansSolr($doc);
        }


        $cliches = $doc->getCliches();
        $similaires = array();
        for ($i = 1; $i < sizeof($ids); $i++) {
            $idSimilaireAndType = explode('_', $ids[$i]);
            if ($idSimilaireAndType[0] == 'examCo')
                $similaires[] = $repoExCo->find(intVal($idSimilaireAndType[1]));
            if ($idSimilaireAndType[0] == 'document')
                $similaires[] = $repoDoc->find(intVal($idSimilaireAndType[1]));
        }
        $href_all = "";
        $href = "";
        $commentaire1 = "<section class='panel' id='exaCo_$ids[0]'> <header class='panel-heading'> Similaires <span class='tools pull-right'> <a class='icon-chevron-down' href='javascript:;'></a> <a class='icon-remove' href='javascript:;'></a> </span> </header> <div class='panel-body'><div class='timeline-messages' id='similaires'>";
        $commentaire2 = "";
        $commentaire3 = "</div> </div> </section>";
        foreach ($similaires as $sim) {
            if ($sim->toString() == 'examCo') {
                $nom = $sim->getAuteurExamCollection()->getNom() . '  ' . $sim->getAuteurExamCollection()->getPrenom();
                $date = $sim->getDateCreation();
                $date = \date_format($date, 'Y-m-d H:i:s');
                $contenu = $sim->getTitre();
                $photo = $sim->getAuteurExamCollection()->getPhoto();
                $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
                $idSim = $sim->getId();
                $nbreVue = $sim->getNbreVue();
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p> <p> <i class='icon-eye-open'></i> $nbreVue </p></div></div></div>";
            }

            if ($sim->toString() == 'document') {
                $dossierPerso = $sim->getSousDossierPerso()->getDossierPerso();
                $user = $repoUser->find($dossierPerso->getId());
                $nom = $user->getNom() . '  ' . $user->getPrenom();
                $date = $sim->getDateCreation();
                $date = \date_format($date, 'Y-m-d H:i:s');
                $contenu = $sim->getTitre();
                $photo = $user->getPhoto();
                $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
                $idSim = $sim->getId();
                $nbreVue = $sim->getNbreVue();
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p><p> <i class='icon-eye-open'></i> $nbreVue </p></div></div></div>";
            }
        }

        $commentaireAll = $commentaire1 . $commentaire2 . $commentaire3;
        foreach ($cliches as $cliche) {
            $href = "/web/" . $cliche->getUploadDir() . "/" . strval($cliche->getId()) . "." . $cliche->getUrl();
            $href_all = $href_all . '{"href":"' . $href . '" , "title":"' . $commentaireAll . '"}**--**';
        }

        return new Response($href_all);
    }

    public function visionnerPublicExCoAction($idComplet) {
        $ids = explode('*', $idComplet);
        $em = $this->getDoctrine()->getManager();
        $repoExCo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $repoDoc = $em->getRepository('InnovUserBundle:Document');
        $repoUser = $em->getRepository('InnovUserBundle:User');
        $examCo = $repoExCo->find(intVal($ids[0]));
        $cliches = $examCo->getCliches();

        $examCo->setNbreVue($examCo->getNbreVue() + 1);
        $em->flush();

        if($this->testSolr())
        {
            if(  ($examCo->getNbreVue() % 5) == 0)
                  $this->updateDansSolr($examCo);
        }

        $similaires = array();
        for ($i = 1; $i < sizeof($ids); $i++) {
            $idSimilaireAndType = explode('_', $ids[$i]);
            if ($idSimilaireAndType[0] == 'examCo')
                $similaires[] = $repoExCo->find(intVal($idSimilaireAndType[1]));
            if ($idSimilaireAndType[0] == 'document')
                $similaires[] = $repoDoc->find(intVal($idSimilaireAndType[1]));
        }
        $href_all = "";
        $href = "";
        $commentaire1 = "<section class='panel' id='exaCo_$ids[0]'> <header class='panel-heading'> Similaires <span class='tools pull-right'> <a class='icon-chevron-down' href='javascript:;'></a> <a class='icon-remove' href='javascript:;'></a> </span> </header> <div class='panel-body'><div class='timeline-messages' id='similaires'>";
        $commentaire2 = "";
        $commentaire3 = "</div> </div> </section>";
        foreach ($similaires as $sim) {
            if ($sim->toString() == 'examCo') {
                $nom = $sim->getAuteurExamCollection()->getNom() . '  ' . $sim->getAuteurExamCollection()->getPrenom();
                $date = $sim->getDateCreation();
                $date = \date_format($date, 'Y-m-d H:i:s');
                $contenu = $sim->getTitre();
                $photo = $sim->getAuteurExamCollection()->getPhoto();
                $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
                $idSim = $sim->getId();
                $nbreVue = $sim->getNbreVue();
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p> <p> <i class='icon-eye-open'></i> $nbreVue </p></div></div></div>";
            }

            if ($sim->toString() == 'document') {
                $dossierPerso = $sim->getSousDossierPerso()->getDossierPerso();
                $user = $repoUser->find($dossierPerso->getId());
                $nom = $user->getNom() . '  ' . $user->getPrenom();
                $date = $sim->getDateCreation();
                $date = \date_format($date, 'Y-m-d H:i:s');
                $contenu = $sim->getTitre();
                $photo = $user->getPhoto();
                $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
                $idSim = $sim->getId();
                $nbreVue = $sim->getNbreVue();
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p><p> <i class='icon-eye-open'></i> $nbreVue </p></div></div></div>";
            }
        }

        $commentaireAll = $commentaire1 . $commentaire2 . $commentaire3;
        foreach ($cliches as $cliche) {
            $href = "/web/" . $cliche->getUploadDir() . "/" . strval($cliche->getId()) . "." . $cliche->getUrl();
            $href_all = $href_all . '{"href":"' . $href . '" , "title":"' . $commentaireAll . '"}**--**';
        }

        return new Response($href_all);
    }

    public function deletePersoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $id_string = $_POST['id'];
        $id_explode = explode('_', $id_string);
        $id = intVal($id_explode[1]);
        $id_type = $id_explode[0];

        if ($id_type == 'doc')
            $this->deleteDocument($id);

        if ($id_type == 'sousD')
            $this->deleteSousDossierPerso($id);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirect($this->generateUrl('InnovGroup_renderJsTree'));
    }

    private function deleteDocument($id) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('InnovUserBundle:Document');

        $document = $repository->find($id);

        $cliches = $document->getCliches();

        $dejaPartage = false;
        foreach ($cliches as $cliche) {
            $ExamCo = $cliche->getExamCollections();
            $EssaiCo = $cliche->getEssaiCollections();
            $docs = $cliche->getDocuments();

            if (( sizeof($ExamCo) != 0) || ( sizeof($EssaiCo) != 0)  || ( sizeof($docs) != 0)) {
                $dejaPartage = true;
                break;
            }
        }

        if ($dejaPartage) {
            foreach ($cliches as $cliche) {
                $cliche->removeDocument($document);
                if($this->testSolr())
                     $this->deleteDansSolr($document);
            }
            $em->remove($document);
        } else {
            foreach ($cliches as $cliche) {
                $em->remove($cliche);
            }
            $em->remove($document);
        }

        $em->flush();
        return new Response('aaaa');
    }

    private function deleteSousDossierPerso($id) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('InnovUserBundle:SousDossierPerso');

        $sousDossierPerso = $repository->find($id);

        $documents = $sousDossierPerso->getDocument();
        foreach ($documents as $document)
            $this->deleteDocument($document->getId());

        $dossierPerso = $sousDossierPerso->getDossierPerso();
        $mesSousDossiersPerso = $dossierPerso->getSousDossiersPerso();

        // on se rassure que le sous dossier supprimer n'est pas le sousDossier 'uploads' ou le s.d. 'favoris'
        if ($mesSousDossiersPerso[0]->getId() != $id && $mesSousDossiersPerso[1]->getId() != $id)
            $em->remove($sousDossierPerso);

        $em->flush();
    }

    public function ajaxTagsAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $query = $_GET["term"];
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository("InnovUserBundle:Tag")->filtrerTag($query);
        $tags_str = "[";
        foreach ($tags as $tag) {
            $tags_str = $tags_str . ' { "id": "' . $tag->getText() . '" ,"text": "' . $tag->getText() . '" } ,';
        }
        $tags_str = rtrim($tags_str, ",");
        $tags_str = $tags_str . " ]";
        return new Response($tags_str);
    }

    public function commenterExCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $comment = new \Innov\GroupBundle\Entity\CommentaireExamCollection();
        $comment->setContenu($_POST['commentaire']);
        $comment->setAuteur($user);

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $exCo = $repo->find(intVal($_POST['id']));
        $comment->setExamCollection($exCo);

        $em->persist($exCo);
        $em->persist($comment);
        $em->flush();

        $this->gestionDroitACL($comment, MaskBuilder::MASK_OWNER);

//        include('httpful.phar');
//
//        // And you're ready to go!
//        $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
//                ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
//                ->body('[{"id":"' . $exCo->getIdSolr() . '", "commentaires":{"add":"' . $comment->getContenu() . '"}}]')             // attach a body/payload...
//                ->send();

        if($this->testSolr())
             $this->updateDansSolr($exCo);
        
        return $this->render('InnovGroupBundle:Group:newCommentExCo.html.twig', array('comments' => $exCo->getCommentaires()));
    }

    public function commenterEssaiCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }


        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $comment = new \Innov\GroupBundle\Entity\CommentaireEssaiCollection();
        $comment->setContenu($_POST['commentaire']);
        $comment->setAuteur($user);

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:EssaiCollection');
        $essaiCo = $repo->find(intVal($_POST['id']));
        $comment->setEssaiCollection($essaiCo);

        $em->persist($essaiCo);
        $em->persist($comment);
        $em->flush();

//        include('httpful.phar');
//
//        // And you're ready to go!
//        $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
//                ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
//                ->body('[{"id":"' . $essaiCo->getExamCollection()->getIdSolr() . '", "commentaires":{"add":"' . $comment->getContenu() . '"}}]')             // attach a body/payload...
//                ->send();

        $this->gestionDroitACL($comment, MaskBuilder::MASK_OWNER);
        return $this->render('InnovGroupBundle:Group:newCommentEssaiCo.html.twig', array('comments' => $essaiCo->getCommentaires()));
    }

    public function SupprimerCommentExCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:CommentaireExamCollection');
        $comment = $repo->find(intVal($_POST['id']));
        $exCo = $comment->getExamCollection();
        $em->remove($comment);
        $em->flush();


        return $this->render('InnovGroupBundle:Group:newCommentExCo.html.twig', array('comments' => $exCo->getCommentaires()));
    }

    public function SupprimerCommentEssaiCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:CommentaireEssaiCollection');
        $comment = $repo->find(intVal($_POST['id']));
        $essaiCo = $comment->getEssaiCollection();
        $em->remove($comment);
        $em->flush();


        return $this->render('InnovGroupBundle:Group:newCommentEssaiCo.html.twig', array('comments' => $essaiCo->getCommentaires()));
    }

    public function AfficherCommentExCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $examCo = $repo->find(intVal($_POST['id']));
        return $this->render('InnovGroupBundle:Group:newCommentExCo.html.twig', array('comments' => $examCo->getCommentaires()));
    }

    public function AfficherCommentEssaiCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:EssaiCollection');
        $essaiCo = $repo->find(intVal($_POST['id']));
        return $this->render('InnovGroupBundle:Group:newCommentEssaiCo.html.twig', array('comments' => $essaiCo->getCommentaires()));
    }

    public function visionnerEssaiCoAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }
        $securityContext = $this->get('security.context');
        $idEssaiCo = intVal($_POST['id']);
        $em = $this->getDoctrine()
                ->getManager();
        $repository = $em
                ->getRepository('InnovGroupBundle:EssaiCollection');

        $essaiCo = $repository->find($idEssaiCo);
        $cliches = $essaiCo->getCliches();
        $id = $essaiCo->getId();

        // on incremente le nbre de Vue

        $essaiCo->setNbreVue($essaiCo->getNbreVue() + 1);
        $em->persist($essaiCo);
        $em->flush();



        $href_all = "";
        $href = "";
       $commentaire1 = "<section class='panel' id='exaCo_$id'> <header class='panel-heading'> </header> <div class='panel-body'><div class='chat-form' style='margin-top:0px;margin-bottom:25px;'> <div class='input-cont '> <input type='text' style='color:#000000;' id='inputCo' class='form-control col-lg-5'  placeholder='Ecrire un Commentaire...'/> </div> <div class='form-group' style='display:none;'> <div class='pull-right chat-features'> <a href='javascript:;'> <i class='icon-camera'></i> </a> <a href='javascript:;'> <i class='icon-link'></i> </a> <a class='commenter' id='$id' href='javascript:;'>Commenter</a> </div> </div> </div><div class='timeline-messages' id='messageAppend'>";
        $commentaire2 = "";
        $commentaire3 = "</div> </div> </section>";
        
        foreach ($essaiCo->getCommentaires() as $comment) {
            $nom = $comment->getAuteur()->getNom() . '  ' . $comment->getAuteur()->getPrenom();
            $date = $comment->getDate();
            $date = \date_format($date, 'Y-m-d H:i:s');
            $contenu = $comment->getContenu();
            $photo = $comment->getAuteur()->getPhoto();
            $href = "/web/" . $photo->getUploadDir() . "/" . strval($photo->getId()) . "." . $photo->getUrl();
            $idComment = $comment->getId();
            if (false === $securityContext->isGranted('DELETE', $comment)) {
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p></div></div></div>";
            } else {
                $commentaire2 = $commentaire2 . "<div class='msg-time-chat'> <a href='#' class='message-img'><img class='avatar' src='$href' alt=''></a> <div class='message-body msg-in'> <span class='arrow'></span> <div class='text'> <p class='attribution'><a href='#'>$nom</a> à $date</p><p>$contenu</p> <p><a class='poubelle' id='delete_$idComment' href='#'> <i  class='icon-trash'> </i> </a></div></div></div>";
            }
        }

        $commentaireAll = $commentaire1 . $commentaire2 . $commentaire3;
        foreach ($cliches as $cliche) {
            $href = "/web/" . $cliche->getUploadDir() . "/" . strval($cliche->getId()) . "." . $cliche->getUrl();
            $href_all = $href_all . '{"href":"' . $href . '" , "title":"' . $commentaireAll . '"}**--**';
        }

        return new Response($href_all);
    }

    public function AjouterAuxFavorisAction() {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $id = $_POST['id'];

        $ids = explode('_', $id);
        $type = $ids[0];

        if ($type == 'favorisEssaiCo')
            $this->AjoutFavorisEssaiCo(intVal($ids[1]));
        elseif ($type == 'favorisExamCo')
            $this->AjoutFavorisExamCo(intVal($ids[1]));
        else
            $this->AjoutFavorisDoc(intVal($ids[1]));

        return $this->redirect($this->generateUrl('InnovGroup_renderJsTree'));
    }

    private function AjoutFavorisExamCo($id) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $examCo = $em->getRepository('InnovGroupBundle:ExamCollection')
                ->find($id);


        $examCo->setNbreFoisFavoris($examCo->getNbreFoisFavoris() + 1);
        $em->flush($examCo);

        if($this->testSolr())
            $this->updateDansSolr($examCo);


        $sousDossierPerso = $user->getDossierPerso()->getSousDossiersPerso();
        $sousDossierFavoris = $sousDossierPerso[1];

        $doc = new Document();
        $doc->setIdSolr('');
        $doc->setTitre($examCo->getTitre());
        $doc->setDescription($examCo->getDescription());
        $sousDossierFavoris->addDocument($doc);
        $doc->setNom($examCo->getTitre());
        foreach ($examCo->getTags() as $tag)
            $doc->addTag($tag);
        foreach ($examCo->getCliches() as $cliche)
            $doc->addClich($cliche);

        $em->persist($doc);
        $em->flush();
        $doc->setIdSolr('document_' . $doc->getId());
        $em->flush();


        // ici on index ce nouveau document dans SORL
        if($this->testSolr())
            $this->indexerDansSolr($doc, 'document_' . $doc->getId(), 'document_');

        // Ici on donne le  droit OWNER a ce user sur le docuument
        $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
    }

    private function AjoutFavorisDoc($id) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $docAjouter = $em->getRepository('InnovUserBundle:Document')
                ->find($id);

        $docAjouter->setNbreFoisFavoris($docAjouter->getNbreFoisFavoris() + 1);
        $em->flush($docAjouter);
        if($this->testSolr())
             $this->updateDansSolr($docAjouter);

        $sousDossierPerso = $user->getDossierPerso()->getSousDossiersPerso();
        $sousDossierFavoris = $sousDossierPerso[1];

        $doc = new Document();
        $doc->setIdSolr('');
        $doc->setTitre($docAjouter->getTitre());
        $doc->setDescription($docAjouter->getDescription());
        $sousDossierFavoris->addDocument($doc);
        $doc->setNom($docAjouter->getTitre());
        foreach ($docAjouter->getTags() as $tag)
            $doc->addTag($tag);
        foreach ($docAjouter->getCliches() as $cliche)
            $doc->addClich($cliche);

        $em->persist($doc);
        $em->flush();
        $doc->setIdSolr('document_' . $doc->getId());
        $em->flush();


        // ici on index ce nouveau document dans SORL
        if($this->testSolr())
        $this->indexerDansSolr($doc, 'document_' . $doc->getId(), 'document_');

        // Ici on donne le  droit OWNER a ce user sur le docuument
        $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
    }

    private function AjoutFavorisEssaiCo($id) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $essaiCo = $em->getRepository('InnovGroupBundle:EssaiCollection')
                ->find($id);


        $essaiCo->setNbreFoisFavoris($essaiCo->getNbreFoisFavoris() + 1);
        $em->flush($essaiCo);


        $sousDossierPerso = $user->getDossierPerso()->getSousDossiersPerso();
        $sousDossierFavoris = $sousDossierPerso[1];

        $doc = new Document();
        $doc->setTitre($essaiCo->getTitre());
        $doc->setDescription($essaiCo->getDescription());
        $sousDossierFavoris->addDocument($doc);
        $doc->setNom($essaiCo->getTitre());
        foreach ($essaiCo->getTags() as $tag)
            $doc->addTag($tag);
        foreach ($essaiCo->getCliches() as $cliche)
            $doc->addClich($cliche);

        $em->persist($doc);
        $em->flush();

        $doc->setIdSolr('document_'.$doc->getId());
         $em->flush();


        // Ici on donne le  droit OWNER a ce user sur le docuument
        $this->gestionDroitACL($doc, MaskBuilder::MASK_OWNER);
    }

    public function voirMembresAction(Groupe $groupe) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $repoGroupeMembre = $em->getRepository('InnovGroupBundle:GroupMembre');

        // on teste si le user est membre du groupe dont il veut consulter les docs si oui on lui
        // afiche des infos supplémentaires dans le template
        $user_is_member = false;
        $checkSatut = $repoGroupeMembre->checkStatut($user, $groupe);
        if ($checkSatut && $checkSatut->getStatut() > 0)
            $user_is_member = true;

        return $this->render('InnovGroupBundle:Group:membres.html.twig', array('groupe' => $groupe, 'user_is_member' => $user_is_member));
    }

    public function traductionAction($name) {

// require_once 'vendor/autoload.php' ;
//
//$tesseract = new TesseractOCR('hello.png');
//$res = $tesseract->recognize();
        return $this->render('InnovGroupBundle:Group:traduction.html.twig', array(
                    'name' => $name,
                ));
    }

    private function deleteDansSolr($object) {
        $deleteUrl = $this->solrDeleteUrl.'<delete><query>id:'.$object->getIdSolr().'</query></delete>&commit=true';
         $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $deleteUrl,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
       
    }

    private function incrementerDansSolr($object, $champ, $val = 2) {

        include('httpful.phar');

        // And you're ready to go!
        if ($champ == 'nbreVue') {
            $valeur = 1 + log(2 * $object->getNbreVue() + $val);
            $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
                    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
                    ->body('[{"id":"' . $object->getIdSolr() . '", "nbre_vue":{"set":"' . $valeur . '"}}]')             // attach a body/payload...
                    ->send();
        }

        if ($champ == 'nbreJaime') {
            $valeur = 1 + log(2 * $object->getNbreJaime() + $val);
            $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
                    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
                    ->body('[{"id":"' . $object->getIdSolr() . '", "nbre_jaime":{"set":"' . $valeur . '"}}]')             // attach a body/payload...
                    ->send();
        }

        if ($champ == 'nbreFoisFavoris') {
            $valeur = 1 + log(2 * $object->getNbreFoisFavoris() + $val);
            $response = \Httpful\Request::post($this->urlHttpFul)                  // Build a PUT request...
                    ->sendsJson()                               // tell it we're sending (Content-Type) JSON...
                    ->body('[{"id":"' . $object->getIdSolr() . '", "nbre_fois_favoris":{"set":"' . $valeur . '"}}]')             // attach a body/payload...
                    ->send();
        }
    }

    private function getEcoleUser() {
        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();

        return $user->getEcole();
    }

    private function journaliserRequete($searchText, $groupSearch = false) {
        // on journalise la requete du user , mais avant on verifie si
        // le user n'est pas en train d'actualiser sa page car si oui
        // sa requete vaudra 'favicon.ico' et on n'en a pas besoin
        if ($searchText != 'favicon.ico') {
            $em = $this->getDoctrine()->getManager();
            // On sauvegarde l'historique de la requete saisie par le user est connecté
            if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

                $user = $this->get('security.context')->getToken()->getUser();

               
                $monHistorique = $user->getHistoriqueRequete();

                $requete = new Requete();
                $requete->setMotsCles($searchText);
                $requete->setDateRequete(new \DateTime());
                $requete->setHistoriqueRequete($monHistorique);
                if ($groupSearch)
                    $requete->setGroupSearch(true);

                $monHistorique->addMesRequete($requete);

                $em->flush($monHistorique);
            }

            // s'il s'agit d'un user non connecter on enregistre tout de même la requete 
            else {
                $requete = new Requete();
                $requete->setMotsCles($searchText);
                $requete->setDateRequete(new \DateTime());
                if ($groupSearch)
                    $requete->setGroupSearch(true);
                $em->persist($requete);
                $em->flush();
            }
            // Fin sauvegarde de l'historique du User
        }
    }

    public function solrSearchGroupeAction($get_query = null) {
        if (!$this->testSolr())
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));

        $em = $this->getDoctrine()->getManager();
        $repoGroupe = $em->getRepository('InnovGroupBundle:Groupe');

        $requestModelerType = new SearchTextType();
        $requestModeler = new SearchText();
        $form = $this->createForm($requestModelerType, $requestModeler);
        $form->handleRequest($this->getRequest());



        // test s'il s'agit d'une requete POST ou GET
        if ($this->getRequest()->getMethod() == 'POST' || $get_query) {

            // s'il s'agit d'un POST on la transforme en GET pour 
            // que la requete du user apparaisse dans sa barre d'URL
            if ($this->getRequest()->getMethod() == 'POST') {
                $searchText = $requestModeler->getQuery();
                return $this->redirect($this->generateUrl('InnovGroup_solrSearchGroupe2', array('get_query' => $searchText)));
            }

            if ($get_query)
                $searchText = $get_query;

            // on journalise la requete du user 
            $this->journaliserRequete($searchText, true);

            // create a client instance
            $client = $this->container->get('solarium.client');

            $query = $client->createSelect();

            $query->setQuery('nom_groupe_search:' . $searchText);

            // this executes the query and returns the result
            $resultset = $client->select($query);

            $groupes = array();
            foreach ($resultset as $groupe) {
                if ($groupe['object'] == 'groupe_') {
                    $group = $repoGroupe->find($groupe['id_object']);
                    if ($group)
                        $groupes[] = $group;
                }
            }

            $requestModeler->setQuery($searchText);
            $form = $this->createForm($requestModelerType, $requestModeler);

            $form->handleRequest($this->getRequest());
            
            
                return $this->render('InnovGroupBundle:Group:resultatRechercheGroupe.html.twig', array('groupes' => $groupes, 'searchTextGroupe' => $searchText, 'form' => $form->createView()));
        }


        return $this->redirect($this->generateUrl('InnovGroup_accueil'));
    }

    public function affircheFormSearchGroupAction($query = null) {
        $requestModelerType = new SearchTextType();
        $requestModeler = new SearchText();
        if ($query)
            $requestModeler->setQuery($query);

        $form = $this->createForm($requestModelerType, $requestModeler);
        $form->handleRequest($this->getRequest());


        return $this->render('InnovGroupBundle:Group:formulaireRechercheGroupe.html.twig', array('form' => $form->createView()));
    }

    public function renderFormRejoindreGroupeAction(Groupe $groupe) {

        $data = array();
        $form = $this->createFormBuilder($data)
                ->add('choix', 'choice', array(
                    'choices' => array('o' => 'OUI', 'n' => 'NON'),
                    'required' => false,
                ))
                ->getForm();

        return $this->render('InnovGroupBundle:Group:formulaireRejoindreGroupe.html.twig', array('formVouloirRejoindre' => $form->createView(), 'groupe' => $groupe));
    }

    public function consulterDocGroupeAction($id, $sort_mode = 'pertinence') {

        $em = $this->getDoctrine()->getManager();




        $repoDoc = $em->getRepository("InnovUserBundle:Document");
        $repoExCo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $repoGroupe = $em->getRepository('InnovGroupBundle:Groupe');
        $repoGroupeMembre = $em->getRepository('InnovGroupBundle:GroupMembre');


        $groupe = $repoGroupe->find($id);
        if (!$groupe)
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));

        $securityContext = $this->get('security.context');
        $user = $securityContext->getToken()->getUser();


        // on teste si le user est membre du groupe dont il veut consulter les docs si oui on lui
        // afiche des infos supplémentaires dans le template
        $user_is_member = false;
        $checkSatut = $repoGroupeMembre->checkStatut($user, $groupe);
        if ($checkSatut && $checkSatut->getStatut() > 0)
            $user_is_member = true;

        $searchText = $groupe->getId();

        // on journalise la requete du user 
        $this->journaliserRequete($searchText);


        // create a client instance
        $client = $this->container->get('solarium.client');

        $query = $client->createSelect();

        $query->setQueryDefaultField('id_groupe');

        //  si le user veux avoir les documents les plus recents
        if ($sort_mode == 'plus_recent') {
            $query->addSort('date_ajout', 'desc');
            $query->addSort('nbre_vue', 'desc');
            $query->addSort('nbre_jaime', 'desc');
            $query->addSort('nbre_fois_favoris', 'desc');
        }

        // si le user veux avoir les documents les plus populaires
        if ($sort_mode == 'populaire') {
            $query->addSort('nbre_vue', 'desc');
            $query->addSort('nbre_jaime', 'desc');
            $query->addSort('nbre_fois_favoris', 'desc');
        }

        $query->setQuery($searchText)
                ->getMoreLikeThis()
                ->setFields('titre^2.0, tags, essai_co, contenu_ocr, description') // les champs utilise par mlt pour definir la similarite entre 2 documents
                ->setQueryFields("contenu_ocr^4.0 description^1.6 essai_co^3.0 tags1.5") // on specifie l'ordre dans lequel les similaires doivent etre classe grace au boosting
                ->setMinimumDocumentFrequency(1)
                ->setMinimumTermFrequency(1)
                ->setMinimumWordLength(3)
                ->setBoost(true)
                ->setCount(150); // on specitife le nbre de document similaires max à renvoyer
        // this executes the query and returns the result
        $resultset = $client->select($query);
        $mlt = $resultset->getMoreLikeThis();
        // $highlighting = $resultset->getHighlighting();
        $docs = array();
        $similaires = array();

        foreach ($resultset as $document) {
            if ($document['object'] == 'document_') {
                $doc = $repoDoc->find($document['id_object']);
                if ($doc)
                    $docs[] = $doc;
            }
            else {
                $doc = $repoExCo->find($document['id_object']);
                if ($doc)
                    $docs[] = $doc;
            }

            if ($doc) {
                $mltResult = $mlt->getResult($document->id);
                if ($mltResult) {
                    $similaires[$document['id']] = array();
                    foreach ($mltResult as $mltDoc) {
                        $mlt_id = $mltDoc->id;
                        $mlt_idStr = explode('_', $mlt_id);
                        if ($mlt_idStr[0] == 'document') {
                            $sim = $repoDoc->find(intVal($mlt_idStr[1]));
                            if ($sim)
                                $similaires[$document['id']][] = $sim;
                        }
                        else {
                            $sim = $repoExCo->find(intVal($mlt_idStr[1]));
                            if ($sim)
                                $similaires[$document['id']][] = $sim;
                        }
                    }
                } else {
                    $similaires[$document['id']] = array(); // on rajoute cette ligne pour que les 2 tableaux similaires et documents aient la même taille
                }
            }
        }

        return $this->render('InnovGroupBundle:Group:consulterDocGroupe.html.twig', array('docs' => $docs, 'similaires' => $similaires, 'groupe' => $groupe, 'user_is_member' => $user_is_member));
    }

    public function voirMesNotifsAction()
    {
         if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

         $securityContext = $this->get('security.context');
         $user = $securityContext->getToken()->getUser();
        $mesNotifs = $user->getNotifsRecus();
        return $this->render('InnovGroupBundle:Group:mesNotifs.html.twig', array("mesNotifs" => $mesNotifs));                    
        
    }
    
    private function testSolr()
    {
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->solrPingUrl,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        $resp_php = json_decode($resp);
        if($resp_php)
        {
            $response_header = $resp_php->responseHeader;
       
            if($response_header)
            {
                $statut= $response_header->status;
            }
            else
            {
                $statut = 1;
            }
        }
        else
            $statut= 1;

        // Close request to clear up some resources
        curl_close($curl);
        // le statut 0 veut dire que le serveur SOLR fonctionne BIEN
        if ($statut == 0)
            return true;
        else
            return false;
    }
    
    public function supprDansGroupeAction($offset)
    {
         $em = $this->getDoctrine()->getManager();
        $id = $_POST['id'];
        $ids = explode('_', $id);
        $groupe = null;
        $type = $ids[0];
        $idstr = $ids[1];
        
        if($type == "deleteExamCo")
        {
            $repoExamCo = $em->getRepository('InnovGroupBundle:ExamCollection');
            $examCo = $repoExamCo->find(intval($idstr));
            $groupe = $examCo->getGroupe();
            $em->remove($examCo);
            
            $em->flush();
            
            $this->deleteDansSolr($examCo);
        }
            
        if($type == "deleteEssaiCo")
        {
             $repoEssaiCo = $em->getRepository('InnovGroupBundle:EssaiCollection');
            $essaiCo = $repoEssaiCo->find(intval($idstr));
            $groupe = $essaiCo->getExamCollection()->getGroupe();
            $em->remove($essaiCo);
            
            $em->flush();
        }
        $all_examCo = $groupe->getExamCollections()->toArray();
        $offset = ($offset < 1)? 1:$offset ;
        $examCollections = array_slice($all_examCo, ($offset-1)*$this->pagination_size, $this->pagination_size-1);
          return $this->render('InnovGroupBundle:Group:listeExamCollection.html.twig', array("groupe"=> $groupe, 'examCollections' => $examCollections));                    
    }
    
    public function listeDesGroupesAction()
    {
        $em = $this->getDoctrine()
                ->getManager();
        
        $repoGroupe = $em->getRepository('InnovGroupBundle:Groupe');
        
        $allGroups = $repoGroupe->findAll();
        
       return $this->render('InnovGroupBundle:Group:allGroups.html.twig', array("allGroups"=> $allGroups));                    

        
    }
    
    public function  voirProfilAction(User $user)
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('InnovGroup_accueil'));
        }

         return $this->render('InnovUserBundle:Profile:show.html.twig', array("user"=> $user));                    
    }

    public function indexerTousAction($offset)
 
   {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('InnovGroupBundle:ExamCollection');
        $repoDoc = $em->getRepository('InnovUserBundle:Document');
        $repoGroupe = $em->getRepository('InnovGroupBundle:Groupe');

 
       /* // indexation des examCos
       $all = $repo->findAll();

       $examCos = array_slice($all, $offset, 99);

        foreach ($examCos as $exCo) {
            $this->updateDansSolr($exCo);
        }*/

    /*
       // indexation des documents
         $allDocs = $repoDoc->findAll();

       $docs = array_slice($allDocs, $offset, 99);

        foreach ($docs as $doc) {
            $this->updateDansSolr($doc);
        }

        */

        // indexation des Groupes
         $allGroups = $repoGroupe->findAll();

       $groupes = array_slice($allGroups, $offset, 99);

        foreach ($groupes as $groupe) {
            $this->indexerGroupSolr($groupe);
        }

        

        return new Response('cooool');

  
   }
    
}
