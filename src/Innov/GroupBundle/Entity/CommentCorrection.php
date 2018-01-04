<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentCorrection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CommentCorrectionRepository")
 */
class CommentCorrection
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
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Correction" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=false)
    */
    private $correction;
    
    /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" )
	* @ORM\JoinColumn(nullable=false)
    */
    private $auteurCommentaire;


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
     * Set correction
     *
     * @param \Innov\GroupBundle\Entity\Correction $correction
     * @return CommentCorrection
     */
    public function setCorrection(\Innov\GroupBundle\Entity\Correction $correction)
    {
        $this->correction = $correction;

        return $this;
    }

    /**
     * Get correction
     *
     * @return \Innov\GroupBundle\Entity\Correction 
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * Set auteurCommentaire
     *
     * @param \Innov\UserBundle\Entity\User $auteurCommentaire
     * @return CommentCorrection
     */
    public function setAuteurCommentaire(\Innov\UserBundle\Entity\User $auteurCommentaire)
    {
        $this->auteurCommentaire = $auteurCommentaire;

        return $this;
    }

    /**
     * Get auteurCommentaire
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getAuteurCommentaire()
    {
        return $this->auteurCommentaire;
    }
}
