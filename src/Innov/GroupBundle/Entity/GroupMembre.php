<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMembre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\GroupMembreRepository")
 */
class GroupMembre
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
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut;
    
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Groupe" )
	* @ORM\JoinColumn(nullable=false)
    */
    private $groupe;
    
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" )
	* @ORM\JoinColumn(nullable=false)
    */
    private $user;


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
     * Set statut
     *
     * @param integer $statut
     * @return GroupMembre
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set groupe
     *
     * @param \Innov\GroupBundle\Entity\Groupe $groupe
     * @return GroupMembre
     */
    public function setGroupe(\Innov\GroupBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Innov\GroupBundle\Entity\Groupe 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set user
     *
     * @param \Innov\UserBundle\Entity\User $user
     * @return GroupMembre
     */
    public function setUser(\Innov\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
