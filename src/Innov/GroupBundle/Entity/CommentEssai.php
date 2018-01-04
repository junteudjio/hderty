<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentEssai
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CommentEssaiRepository")
 */
class CommentEssai
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
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Essai" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=false)
    */
    private $essai;
    
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
     * Set essai
     *
     * @param \Innov\GroupBundle\Entity\Essai $essai
     * @return CommentEssai
     */
    public function setEssai(\Innov\GroupBundle\Entity\Essai $essai)
    {
        $this->essai = $essai;

        return $this;
    }

    /**
     * Get essai
     *
     * @return \Innov\GroupBundle\Entity\Essai 
     */
    public function getEssai()
    {
        return $this->essai;
    }

    /**
     * Set auteurCommentaire
     *
     * @param \Innov\UserBundle\Entity\User $auteurCommentaire
     * @return CommentEssai
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
