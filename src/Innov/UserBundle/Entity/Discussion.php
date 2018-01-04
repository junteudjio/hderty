<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discussion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\DiscussionRepository")
 */
class Discussion
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
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMessage", type="datetime")
     */
    private $dateMessage;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\User", inversedBy="mesDiscussions")
    */
    private $intervenants;
    
     /**
     * @ORM\OneToOne(targetEntity="Innov\UserBundle\Entity\User" ,cascade={"persist","remove"})
    */
    private $emetteur;


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
     * Set message
     *
     * @param string $message
     * @return Discussion
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateMessage
     *
     * @param \DateTime $dateMessage
     * @return Discussion
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = $dateMessage;

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime 
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->intervenants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateMessage = new \DateTime();
    }

    /**
     * Add intervenants
     *
     * @param \Innov\UserBundle\Entity\User $intervenants
     * @return Discussion
     */
    public function addIntervenant(\Innov\UserBundle\Entity\User $intervenants)
    {
        $this->intervenants[] = $intervenants;
        $intervenants->addMesDiscussion($this);

        return $this;
    }

    /**
     * Remove intervenants
     *
     * @param \Innov\UserBundle\Entity\User $intervenants
     */
    public function removeIntervenant(\Innov\UserBundle\Entity\User $intervenants)
    {
        $this->intervenants->removeElement($intervenants);
    }

    /**
     * Get intervenants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIntervenants()
    {
        return $this->intervenants;
    }

    /**
     * Set emetteur
     *
     * @param \Innov\UserBundle\Entity\User $emetteur
     * @return Discussion
     */
    public function setEmetteur(\Innov\UserBundle\Entity\User $emetteur = null)
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get emetteur
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }
}
