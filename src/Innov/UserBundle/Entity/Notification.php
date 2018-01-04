<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\NotificationRepository")
 */
class Notification
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="vue", type="boolean")
     */
    private $vue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNotif", type="datetime")
     */
    private $dateNotif;
    
    /**
     * @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" ,cascade={"persist"}, inversedBy="notifsEnvoyes")
     * @ORM\JoinColumn(nullable=true)
    */
    private $auteurNotif;
    
    /**
     * @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Groupe" ,cascade={"persist"}, inversedBy="notif")
     * @ORM\JoinColumn(nullable=true)
    */
    private $groupeNotif;
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" ,cascade={"persist"}, inversedBy="notifsRecus")
	* @ORM\JoinColumn(nullable=false)
    */
    private $destinataireNotif;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="typeNofit", type="integer", nullable=true)
     */
    private $typeNotif;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dateNotif = new \DateTime();
        $this->vue = false;
        $this->typeNotif = 0;
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
     * Set contenu
     *
     * @param string $contenu
     * @return Notification
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateNotif
     *
     * @param \DateTime $dateNotif
     * @return Notification
     */
    public function setDateNotif($dateNotif)
    {
        $this->dateNotif = $dateNotif;

        return $this;
    }

    /**
     * Get dateNotif
     *
     * @return \DateTime 
     */
    public function getDateNotif()
    {
        return $this->dateNotif;
    }

    /**
     * Set auteurNotif
     *
     * @param \Innov\UserBundle\Entity\User $auteurNotif
     * @return Notification
     */
    public function setAuteurNotif(\Innov\UserBundle\Entity\User $auteurNotif)
    {
        $this->auteurNotif = $auteurNotif;
        $auteurNotif->addNotifsEnvoye($this);
        return $this;
    }

    /**
     * Get auteurNotif
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getAuteurNotif()
    {
        return $this->auteurNotif;
    }

    /**
     * Set destinataireNotif
     *
     * @param \Innov\UserBundle\Entity\User $destinataireNotif
     * @return Notification
     */
    public function setDestinataireNotif(\Innov\UserBundle\Entity\User $destinataireNotif)
    {
        $this->destinataireNotif = $destinataireNotif;
        $destinataireNotif->addNotifsRecus($this);
        return $this;
    }

    /**
     * Get destinataireNotif
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getDestinataireNotif()
    {
        return $this->destinataireNotif;
    }

    /**
     * Set vue
     *
     * @param boolean $vue
     * @return Notification
     */
    public function setVue($vue)
    {
        $this->vue = $vue;

        return $this;
    }

    /**
     * Get vue
     *
     * @return boolean 
     */
    public function getVue()
    {
        return $this->vue;
    }

    /**
     * Set groupeNotif
     *
     * @param \Innov\GroupBundle\Entity\Groupe $groupeNotif
     * @return Notification
     */
    public function setGroupeNotif(\Innov\GroupBundle\Entity\Groupe $groupeNotif = null)
    {
        $this->groupeNotif = $groupeNotif;
        $groupeNotif->addNotif($this);
        return $this;
    }

    /**
     * Get groupeNotif
     *
     * @return \Innov\GroupBundle\Entity\Groupe 
     */
    public function getGroupeNotif()
    {
        return $this->groupeNotif;
    }

    /**
     * Set typeNotif
     *
     * @param integer $typeNotif
     * @return Notification
     */
    public function setTypeNotif($typeNotif)
    {
        $this->typeNotif = $typeNotif;

        return $this;
    }

    /**
     * Get typeNotif
     *
     * @return integer 
     */
    public function getTypeNotif()
    {
        return $this->typeNotif;
    }
}
