<?php
// src/Innov/UserBundle/Entity/User.php

namespace Innov\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
 
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="id_solr", type="text")
     */
    private $id_solr;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    
//    /**
//     * @var string
//     *
//     * @ORM\Column(name="sexe", type="string", length=1)
//     */
////    private $sexe;
    
    /**
    * @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\Photo")
     * @ORM\JoinColumn(nullable=false)
    */
    private $photo;
    
   /**
    * @ORM\OneToOne(targetEntity="Innov\UserBundle\Entity\DossierPerso",cascade={"persist","remove"})
    */
    private $dossierPerso;
    
    /**
    * @ORM\OneToOne(targetEntity="Innov\UserBundle\Entity\HistoriqueRequete",cascade={"persist","remove"})
    */
    private $HistoriqueRequete;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\Notification", mappedBy="destinataireNotif", cascade={"persist","remove"})
    */
    private $notifsRecus; 
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\ExamCollection", mappedBy="auteurExamCollection")
    */
    private $mesExamCollections;  
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\EssaiCollection", mappedBy="auteurEssaiCollection")
    */
    private $mesEssaisCollections; 
    /**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\Notification", mappedBy="auteurNotif", cascade={"persist","remove"})
    */
    private $notifsEnvoyes;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Discussion", mappedBy="intervenants", cascade={"persist","remove"} )
    */
    private $mesDiscussions;
    
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\GroupBundle\Entity\Groupe", mappedBy="membres" )
    */
    private $mesGroupes;
   
    
   /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\Ecole" , inversedBy="eleves")
	* @ORM\JoinColumn(nullable=true)
    */
    private $ecole;


    
    
    
    
    

    public function __construct()
    {
        parent::__construct();
        $this->mesGroupes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesDiscussions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notifsEnvoyes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notifsRecus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesExamCollections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mesEssaisCollections = new \Doctrine\Common\Collections\ArrayCollection();

       
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    
    /**
     * Set photo
     *
     * @param \Innov\UserBundle\Entity\Photo $photo
     * @return User
     */
    public function setPhoto(\Innov\UserBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \Innov\UserBundle\Entity\Photo 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

   
   
  
    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set id_solr
     *
     * @param string $idSolr
     * @return User
     */
    public function setIdSolr($idSolr)
    {
        $this->id_solr = $idSolr;

        return $this;
    }

    /**
     * Get id_solr
     *
     * @return string 
     */
    public function getIdSolr()
    {
        return $this->id_solr;
    }

    
    /**
     * Add mesGroupes
     *
     * @param \Innov\GroupBundle\Entity\Groupe $mesGroupes
     * @return User
     */
    public function addMesGroupe(\Innov\GroupBundle\Entity\Groupe $mesGroupes)
    {
        $this->mesGroupes[] = $mesGroupes;

        return $this;
    }

    /**
     * Remove mesGroupes
     *
     * @param \Innov\GroupBundle\Entity\Groupe $mesGroupes
     */
    public function removeMesGroupe(\Innov\GroupBundle\Entity\Groupe $mesGroupes)
    {
        $this->mesGroupes->removeElement($mesGroupes);
    }

    /**
     * Get mesGroupes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesGroupes()
    {
        return $this->mesGroupes;
    }

    
    /**
     * Add mesDiscussions
     *
     * @param \Innov\UserBundle\Entity\Discussion $mesDiscussions
     * @return User
     */
    public function addMesDiscussion(\Innov\UserBundle\Entity\Discussion $mesDiscussions)
    {
        $this->mesDiscussions[] = $mesDiscussions;

        return $this;
    }

    /**
     * Remove mesDiscussions
     *
     * @param \Innov\UserBundle\Entity\Discussion $mesDiscussions
     */
    public function removeMesDiscussion(\Innov\UserBundle\Entity\Discussion $mesDiscussions)
    {
        $this->mesDiscussions->removeElement($mesDiscussions);
    }

    /**
     * Get mesDiscussions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesDiscussions()
    {
        return $this->mesDiscussions;
    }

    

    /**
     * Add notifsRecus
     *
     * @param \Innov\UserBundle\Entity\Notification $notifsRecus
     * @return User
     */
    public function addNotifsRecus(\Innov\UserBundle\Entity\Notification $notifsRecus)
    {
        $this->notifsRecus[] = $notifsRecus;

        return $this;
    }

    /**
     * Remove notifsRecus
     *
     * @param \Innov\UserBundle\Entity\Notification $notifsRecus
     */
    public function removeNotifsRecus(\Innov\UserBundle\Entity\Notification $notifsRecus)
    {
        $this->notifsRecus->removeElement($notifsRecus);
    }

    /**
     * Get notifsRecus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotifsRecus()
    {
        return $this->notifsRecus;
    }

    /**
     * Add notifsEnvoyes
     *
     * @param \Innov\UserBundle\Entity\Notification $notifsEnvoyes
     * @return User
     */
    public function addNotifsEnvoye(\Innov\UserBundle\Entity\Notification $notifsEnvoyes)
    {
        $this->notifsEnvoyes[] = $notifsEnvoyes;

        return $this;
    }

    /**
     * Remove notifsEnvoyes
     *
     * @param \Innov\UserBundle\Entity\Notification $notifsEnvoyes
     */
    public function removeNotifsEnvoye(\Innov\UserBundle\Entity\Notification $notifsEnvoyes)
    {
        $this->notifsEnvoyes->removeElement($notifsEnvoyes);
    }

    /**
     * Get notifsEnvoyes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotifsEnvoyes()
    {
        return $this->notifsEnvoyes;
    }

    /**
     * Set dossierPerso
     *
     * @param \Innov\UserBundle\Entity\DossierPerso $dossierPerso
     * @return User
     */
    public function setDossierPerso(\Innov\UserBundle\Entity\DossierPerso $dossierPerso = null)
    {
        $this->dossierPerso = $dossierPerso;

        return $this;
    }

    /**
     * Get dossierPerso
     *
     * @return \Innov\UserBundle\Entity\DossierPerso 
     */
    public function getDossierPerso()
    {
        return $this->dossierPerso;
    }

    /**
     * Set ecole
     *
     * @param \Innov\UserBundle\Entity\Ecole $ecole
     * @return User
     */
    public function setEcole(\Innov\UserBundle\Entity\Ecole $ecole = null)
    {
        $this->ecole = $ecole;
        $ecole->addEleve($this);
        return $this;
    }

    /**
     * Get ecole
     *
     * @return \Innov\UserBundle\Entity\Ecole 
     */
    public function getEcole()
    {
        return $this->ecole;
    }
    
    public function __toString() {
        return $this->nom.' '.$this->prenom ;
    }

    /**
     * Add mesExamCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $mesExamCollections
     * @return User
     */
    public function addMesExamCollection(\Innov\GroupBundle\Entity\ExamCollection $mesExamCollections)
    {
        $this->mesExamCollections[] = $mesExamCollections;
        $mesExamCollections->setAuteurExamCollection($this);
        return $this;
    }

    /**
     * Remove mesExamCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $mesExamCollections
     */
    public function removeMesExamCollection(\Innov\GroupBundle\Entity\ExamCollection $mesExamCollections)
    {
        $this->mesExamCollections->removeElement($mesExamCollections);
    }

    /**
     * Get mesExamCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesExamCollections()
    {
        return $this->mesExamCollections;
    }

    /**
     * Add mesEssaisCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $mesEssaisCollections
     * @return User
     */
    public function addMesEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $mesEssaisCollections)
    {
        $this->mesEssaisCollections[] = $mesEssaisCollections;
        $mesEssaisCollections->setAuteurEssaiCollection($this);
        return $this;
    }

    /**
     * Remove mesEssaisCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $mesEssaisCollections
     */
    public function removeMesEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $mesEssaisCollections)
    {
        $this->mesEssaisCollections->removeElement($mesEssaisCollections);
    }

    /**
     * Get mesEssaisCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesEssaisCollections()
    {
        return $this->mesEssaisCollections;
    }

    /**
     * Set HistoriqueRequete
     *
     * @param \Innov\UserBundle\Entity\HistoriqueRequete $historiqueRequete
     * @return User
     */
    public function setHistoriqueRequete(\Innov\UserBundle\Entity\HistoriqueRequete $historiqueRequete = null)
    {
        $this->HistoriqueRequete = $historiqueRequete;

        return $this;
    }

    /**
     * Get HistoriqueRequete
     *
     * @return \Innov\UserBundle\Entity\HistoriqueRequete 
     */
    public function getHistoriqueRequete()
    {
        return $this->HistoriqueRequete;
    }
    
    public function setEmail($email){
    parent::setEmail($email);
    parent::setUsername($email);
            return $this;

    }
}
