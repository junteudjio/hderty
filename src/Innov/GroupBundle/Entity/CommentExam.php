<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentExam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CommentExamRepository")
 */
class CommentExam
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
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Exam" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=false)
    */
    private $exam;
    
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
     * Set exam
     *
     * @param \Innov\GroupBundle\Entity\Exam $exam
     * @return CommentExam
     */
    public function setExam(\Innov\GroupBundle\Entity\Exam $exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return \Innov\GroupBundle\Entity\Exam 
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set auteurCommentaire
     *
     * @param \Innov\UserBundle\Entity\User $auteurCommentaire
     * @return CommentExam
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
