<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireEssaiCollection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CommentaireEssaiCollectionRepository")
 */
class CommentaireEssaiCollection
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreJaime", type="integer")
     */
    private $nbreJaime;
    
    
    /**
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\EssaiCollection" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=true)
    */
    private $essaiCollection;
    
    
    /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User")
	* @ORM\JoinColumn(nullable=false)
    */
    private $auteur;

    
    public function __construct() {
        $this->setDate(new \DateTime());
        $this->setNbreJaime(0);
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
     * @return CommentaireEssaiCollection
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
     * Set date
     *
     * @param \DateTime $date
     * @return CommentaireEssaiCollection
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbreJaime
     *
     * @param integer $nbreJaime
     * @return CommentaireEssaiCollection
     */
    public function setNbreJaime($nbreJaime)
    {
        $this->nbreJaime = $nbreJaime;

        return $this;
    }

    /**
     * Get nbreJaime
     *
     * @return integer 
     */
    public function getNbreJaime()
    {
        return $this->nbreJaime;
    }

    /**
     * Set essaiCollection
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $essaiCollection
     * @return CommentaireEssaiCollection
     */
    public function setEssaiCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaiCollection = null)
    {
        $this->essaiCollection = $essaiCollection;

        return $this;
    }

    /**
     * Get essaiCollection
     *
     * @return \Innov\GroupBundle\Entity\EssaiCollection 
     */
    public function getEssaiCollection()
    {
        return $this->essaiCollection;
    }

    /**
     * Set auteur
     *
     * @param \Innov\UserBundle\Entity\User $auteur
     * @return CommentaireEssaiCollection
     */
    public function setAuteur(\Innov\UserBundle\Entity\User $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}
