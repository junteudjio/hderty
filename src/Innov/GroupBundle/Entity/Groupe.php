<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\GroupeRepository")
 */
class Groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="idSolr", type="string", length=255, nullable=true)
     */
    private $idSolr;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\User", inversedBy="mesGroupes" )
    */
    private $membres;
    
    
    
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\Notification", mappedBy="groupeNotif", cascade={"persist","remove"})
    */
    private $notif; 
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\ExamCollection", mappedBy="groupe")
    */
    private $examCollections; 
    


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
     * Set nom
     *
     * @param string $nom
     * @return Groupe
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Groupe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->examCollections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notif = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation = new \DateTime();
    }

    /**
     * Add membres
     *
     * @param \Innov\UserBundle\Entity\User $membres
     * @return Groupe
     */
    public function addMembre(\Innov\UserBundle\Entity\User $membres)
    {
        $this->membres[] = $membres;
        $membres->addMesGroupe($this);
        return $this;
    }

    /**
     * Remove membres
     *
     * @param \Innov\UserBundle\Entity\User $membres
     */
    public function removeMembre(\Innov\UserBundle\Entity\User $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }

    
//
//    /**
//     * Add groupMembre
//     *
//     * @param \InnovGroupBundle\Entity\GroupMembre $groupMembre
//     * @return Groupe
//     */
//    public function addGroupMembre(\InnovGroupBundle\Entity\GroupMembre $groupMembre)
//    {
//        $this->groupMembre[] = $groupMembre;
//        $groupMembre->setGroupe($this);
//        return $this;
//    }
//
//    /**
//     * Remove groupMembre
//     *
//     * @param \InnovGroupBundle\Entity\GroupMembre $groupMembre
//     */
//    public function removeGroupMembre(\InnovGroupBundle\Entity\GroupMembre $groupMembre)
//    {
//        $this->groupMembre->removeElement($groupMembre);
//    }

//    /**
//     * Get groupMembre
//     *
//     * @return \Doctrine\Common\Collections\Collection 
//     */
//    public function getGroupMembre()
//    {
//        return $this->groupMembre;
//    }
//

    /**
     * Add notif
     *
     * @param \Innov\UserBundle\Entity\Notification $notif
     * @return Groupe
     */
    public function addNotif(\Innov\UserBundle\Entity\Notification $notif)
    {
        $this->notif[] = $notif;
        
        return $this;
    }

    /**
     * Remove notif
     *
     * @param \Innov\UserBundle\Entity\Notification $notif
     */
    public function removeNotif(\Innov\UserBundle\Entity\Notification $notif)
    {
        $this->notif->removeElement($notif);
    }

    /**
     * Get notif
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotif()
    {
        return $this->notif;
    }

    /**
     * Add examCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollections
     * @return Groupe
     */
    public function addExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollections)
    {
        $this->examCollections[] = $examCollections;
        return $this;
    }

    /**
     * Remove examCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollections
     */
    public function removeExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollections)
    {
        $this->examCollections->removeElement($examCollections);
    }

    /**
     * Get examCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExamCollections()
    {
        return $this->examCollections;
    }

    /**
     * Set idSolr
     *
     * @param string $idSolr
     * @return Groupe
     */
    public function setIdSolr($idSolr = null)
    {
        $this->idSolr = $idSolr;

        return $this;
    }

    /**
     * Get idSolr
     *
     * @return string 
     */
    public function getIdSolr()
    {
        return $this->idSolr;
    }
}
