<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('logout', array (
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'The fields {{ fields }} were not expected.' => 'Les champs {{ fields }} n\'ont pas été prévus.',
    'The fields {{ fields }} are missing.' => 'Les champs {{ fields }} sont manquants.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les droits d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Droits invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Pas de privilèges pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Pas de session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur ne peut pas être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les droits ont expirés.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nom d\'utilisateur ou mot de passe incorrect',
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur :',
    'security.login.password' => 'Mot de passe :',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail :',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe :',
    'form.username' => 'Nom d\'utilisateur :',
    'form.email' => 'Adresse e-mail :',
    'form.current_password' => 'Mot de passe actuel :',
    'form.password' => 'Mot de passe :',
    'form.password_confirmation' => 'Vérification :',
    'form.new_password' => 'Nouveau mot de passe :',
    'form.new_password_confirmation' => 'Vérification :',
  ),
  'messages' => 
  array (
    'Symfony2 is great' => 'J\'aime Symfony2',
    'innov.register_and_login.label' => 'Inscription H-Derty',
    'innov.register_and_login.prenom' => 'prenom',
    'innov.register_and_login.prenom_place_h' => 'votre prenom',
    'innov.register_and_login.nom' => 'nom',
    'innov.register_and_login.nom_place_h' => 'votre nom',
    'innov.register_and_login.email' => 'email',
    'innov.register_and_login.email_place_h' => 'votre email',
    'innov.register_and_login.password' => 'mot de passe',
    'innov.register_and_login.confirm_password' => 'confirmez le mot de passe',
    'innov.register_and_login.creer_btn' => 'creer un nouveau compte',
    'innov.register_and_login.deja_un_compte' => 'vous êtes déjà membre ?',
    'innov.register_and_login.nouveau' => 'nouveau ?',
    'innov.accueil.inscription' => 's\'inscrire',
    'innov.accueil.creer_compte' => 'creer un compte',
    'innov.accueil.login' => 'connexion',
    'innov.accueil.slogan' => 'les étudiants l\'adorent avant, pendant et après leurs examens !',
    'innov.accueil.hderty_vous_permet' => 'vous permet de <br> 1- retrouver des sujets d\' examens de votre école et <br> d\' ailleurs qui vous interessent ! <br> 2- grâce à votre mobile, partager rapidemment<br> exercices et solutions avec vos collègues !<br> 3- résoudre tout types d\' exercices en ligne avec vos <br> camarades et profiter de l\' intelligence collective <br> pour aller plus vite ! <br> 4- Et surtout de réussir à vos examens !',
    'innov.accueil.hderty_vous_permet_conclusion' => 'Réussir devient plus simple grâce à H-derty',
    'innov.accueil.regarder_video' => 'regardez cette vidéo pour en savoir plus sur',
    'innov.accueil.utile' => 'Utile',
    'innov.accueil.social' => 'Social',
    'innov.accueil.benefique' => 'Bénéfique',
    'innov.accueil.utile_desc' => 'Chercher des anciennes épreuves <br> ça arrive à tout le monde ! <br> Arrêtez de Chercher ;<br>vous les avez déjà sur',
    'innov.accueil.social_desc1' => 'Pourquoi Travailler tout seul ? <br> la vie c\'est social , les études c\'est social ,<br> le boulot c\'est social !',
    'innov.accueil.social_desc2' => 'Aussi c\'est Social !',
    'innov.accueil.benefique_desc1' => 'les  "photocopies" c\'est dépassées,  <br> les "photos" c\'est mieux !  <br> utiliser',
    'innov.accueil.benefique_desc2' => 'et <br> partager rapidemment épreuves & <br> corrigés avec vos collègues',
    'innov.accueil.telecharger_mobile' => 'Télécharger H-Derty-Mobile',
    'innov.accueil.hderty_partout' => 'Hderty est partout!',
    'innov.aller_a_laccueil' => 'retournez à l\'accueil',
    'innov.welcome' => 'Bienvenue',
    'innov.erreur_serveur.label' => 'Les Serveurs  H-derty  sont partiellement Indisponible pour le moment',
    'innov.erreur_serveur.excuse' => 'Nous nous excusons pour ce léger désagremment',
    'innov.notification.label' => 'notifications',
    'innov.notification.accepter_demande' => 'accepter',
    'innov.groupe.form_button_creer' => 'creer un groupe',
    'innov.groupe.form_creer_header' => 'creer un nouveau groupe',
    'innov.groupe.form_fermer' => 'annuler',
    'innov.groupe.creer_action' => 'créer',
    'innov.groupe.form_nom_groupe_label' => 'nom du groupe',
    'innov.groupe.form_ajout_membre_label' => 'ajouter des membres',
    'innov.groupe.ajout_membre_placeholder' => 'entrez les noms de vos collègues ici',
    'innov.groupe.demande_rejoindre' => 'demandez à rejoindre ce groupe',
    'innov.groupe.deja_membre' => 'vous êtes déjà membre  de ce groupe',
    'innov.groupe.poster_dans' => 'posté dans',
    'innov.groupe.button_chercher' => 'chercher un groupe',
    'innov.groupe.mes_groupes' => 'mes groupes',
    'innov.groupe.voir_membres' => '%count% membre|]1,+Inf] %count% membres',
    'innov.groupe.jaime' => 'j\' aime',
    'innov.groupe.commenter' => 'commenter',
    'innov.groupe.partager_ennonce' => 'partager un énoncé',
    'innov.groupe.partager_essai' => 'partager votre correction',
    'innov.groupe.partager_clic' => 'DOUBLE-CLIQUEZ sur le document pour le partager',
    'innov.groupe.nbre_vue' => '%count% vue|]1,+Inf]%count% vues',
    'innov.groupe.title_commenter_doc' => 'soyez le premier à commenter ce document|]0,1] %count% personne a commenté ce document|]1,+Inf]%count% personnes ont commenté ce document',
    'innov.groupe.title_aimer_doc' => 'soyez le premier à aimer ce document|]0,1] %count% personne a aimé ce document|]1,+Inf]%count% personnes ont aimé ce document',
    'innov.groupe.title_voir_doc' => 'soyez le premier à consulter ce document|]0,1] %count% personne a consulté ce document|]1,+Inf]%count% personnes ont consulté ce document',
    'innov.groupe.title_favoris_doc' => 'ajouter ce document à vos favoris',
    'innov.groupe.title_partager_dans_groupe_doc' => 'partager ce document dans un groupe',
    'innov.groupe.title_aimer_doc_clic' => 'cliquer ici si vous aimé ce document',
    'innov.groupe.title_commenter_doc_clic' => 'cliquer ici pour commenter ce document',
    'innov.groupe.ajout_doc_upload' => 'partager depuis votre ordinateur',
    'innov.groupe.ajout_doc_espace_perso' => 'partager depuis votre  <br> espace perso',
    'innov.navbar.message.header' => 'aucun nouveau message| ]0,1]%count% nouveau message |]1,+Inf] %count% nouveaux messages',
    'innov.navbar.message.contenu' => 'vous a envoyé un message à',
    'innov.navbar.message.footer' => 'voir tous mes messages',
    'innov.navbar.notification.header' => 'aucune nouvelle notification| ]0,1] %count% nouvelle notification |]1,+Inf] %count% nouvelles notifications',
    'innov.navbar.notification.footer' => 'voir toutes mes notifications',
    'innov.navbar.notification.notif_demande_rejoindre' => 'a demander à rejoindre le groupe',
    'innov.navbar.notification.notif_accepter_demande' => 'a accepter votre demande à rejoindre',
    'innov.navbar.notification.notif_vous_a_ajouter' => 'vous a ajouter au groupe',
    'innov.navbar.search_placeholder' => 'recherchez des exercices, examens, epreuves, TDs, ..., qui vous interessent',
    'innov.navbar.title_search_bar' => 'entrez des mots clés exemple   "fonctions injectives ; épreuve d\'algèbre ENSA tanger 2010 "',
    'innov.navbar.plein_ecran' => 'plein ecran',
    'innov.navbar.profil' => 'votre profil',
    'innov.navbar.securite' => 'sécurité',
    'innov.navbar.deconnexion' => 'se déconnecter',
    'innov.espace_perso.header' => 'ESPACE PERSO',
    'innov.espace_perso.creer_dossier' => 'creer un dossier',
    'innov.espace_perso.ajout_document' => 'ajouter un document',
    'innov.espace_perso.mes_uploads' => 'Telechargements',
    'innov.espace_perso.mes_favoris' => 'Favoris',
    'innov.espace_perso.placeholder_creer_dossier' => 'nom du',
    'innov.espace_perso.helper_text' => '( CLIC-DROIT pour ouvrir vos dossiers/documents )',
    'innov.upload_form.header' => 'télécharger un nouveau document',
    'innov.upload_form.document_titre' => 'donner un nom à ce document',
    'innov.upload_form.document_tag' => 'ajouter des tags',
    'innov.upload_form.button_add' => 'ajouter des images',
    'innov.upload_form.button_submit' => 'télécharger',
    'innov.upload_form.button_annuler' => 'annuler',
    'innov.upload_form.button_supprimer' => 'supprimer ces images',
    'innov.upload_form.document_description' => 'ajouter une description',
    'innov.content.listesDesGroupesTitre' => 'Liste Des Groupes',
    'innov.content.groupeAdminLabel' => 'Administrateur',
    'innov.content.vouloirRejoindreGroupe' => 'rejoindre ce groupe',
    'innov.content.vouloirRejoindreGroupe2' => 'Vous n\'êtes pas encore membres de ce groupe ! voulez vous le rejoindre ?',
    'innov.content.voirMembresGroupe' => 'consulter la liste des membres',
    'innov.content.resultat_recherche' => 'resultat de la recherche pour',
    'innov.content.voirDocumentsGroupe' => 'consulter ces documents',
    'innov.content.nombreDeMembres' => '1 membre| %count% membres',
    'innov.content.nombreDeDocumentsPartages' => '{0} aucun document partagé|{1} %count% document partagé| ]1,Inf]environ %count% documents partagés',
    'innov.content.consulterDocGroupe_label' => 'les Documents Du Groupe',
    'innov.content.consulterDocGroupe_classerPar' => 'classer Par',
    'innov.content.consulterDocGroupe_classerPar_pertinence' => 'pertinence',
    'innov.content.consulterDocGroupe_classerPar_plus_recent' => 'plus recent',
    'innov.content.consulterDocGroupe_classerPar_populaire' => 'populaire',
    'innov.content.recommandations' => 'Ces documents pourraient vous interesser',
    'innov.content.groupe_non_trouve' => 'n\'a pas été trouvé',
    'innov.content.verif_orthographe_ou' => 'vérifier l\'orthographe  ou alors',
    'innov.content.consulter_liste_groupe' => 'consulter la liste des groupes',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);


return $catalogue;
