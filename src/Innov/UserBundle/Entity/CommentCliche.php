<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentCliche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\CommentClicheRepository")
 */
class CommentCliche
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
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\Cliche" , inversedBy="commentaires")
	* @ORM\JoinColumn(nullable=false)
    */
    private $cliche;

    /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User")
	* @ORM\JoinColumn(nullable=false)
    */
    private $auteur;

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
     * @return CommentCliche
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
     * @return CommentCliche
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
     * @return CommentCliche
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
     * Set cliche
     *
     * @param \Innov\UserBundle\Entity\Cliche $cliche
     * @return CommentCliche
     */
    public function setCliche(\Innov\UserBundle\Entity\Cliche $cliche)
    {
        $this->cliche = $cliche;

        return $this;
    }

    /**
     * Get cliche
     *
     * @return \Innov\UserBundle\Entity\Cliche 
     */
    public function getCliche()
    {
        return $this->cliche;
    }

    /**
     * Set auteur
     *
     * @param \Innov\UserBundle\Entity\User $auteur
     * @return CommentCliche
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
