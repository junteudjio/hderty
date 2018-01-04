<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireExamCollection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CommentaireExamCollectionRepository")
 */
class CommentaireExamCollection
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
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\ExamCollection" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=true)
    */
    private $examCollection;
    
    
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
     * @return CommentaireExamCollection
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
     * @return CommentaireExamCollection
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
     * @return CommentaireExamCollection
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
     * Set examCollection
     *
     * @param \Innov\GroupBundle\Entity\ExamColection $examCollection
     * @return CommentaireExamCollection
     */
    public function setExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollection = null)
    {
        $this->examCollection = $examCollection;

        return $this;
    }

    /**
     * Get examCollection
     *
     * @return \Innov\GroupBundle\Entity\ExamCollection 
     */
    public function getExamCollection()
    {
        return $this->examCollection;
    }

    /**
     * Set auteur
     *
     * @param \Innov\UserBundle\Entity\User $auteur
     * @return CommentaireExamCollection
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
