<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requete
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\RequeteRepository")
 */
class Requete
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
     * @ORM\Column(name="motsCles", type="text", nullable=true)
     */
    private $motsCles;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRequete", type="datetime")
     */
    private $dateRequete;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="groupSearch", type="boolean" , nullable=true)
     */
    private $groupSearch;


     /**
    * @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\HistoriqueRequete" , inversedBy="mesRequetes")
    * @ORM\JoinColumn(nullable=true)
    */
    // nullable=true pour permettre de sauvegarder les requêtes des user non connecter
    private $historiqueRequete;


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
     * Set motsCles
     *
     * @param string $motsCles
     * @return Requete
     */
    public function setMotsCles($motsCles=null)
    {
        $this->motsCles = $motsCles;

        return $this;
    }

    /**
     * Get motsCles
     *
     * @return string 
     */
    public function getMotsCles()
    {
        return $this->motsCles;
    }

    /**
     * Set dateRequete
     *
     * @param \DateTime $dateRequete
     * @return Requete
     */
    public function setDateRequete($dateRequete)
    {
        $this->dateRequete = $dateRequete;

        return $this;
    }

    /**
     * Get dateRequete
     *
     * @return \DateTime 
     */
    public function getDateRequete()
    {
        return $this->dateRequete;
    }

    /**
     * Set historiqueRequete
     *
     * @param \Innov\UserBundle\Entity\HistoriqueRequete $historiqueRequete
     * @return Requete
     */
    public function setHistoriqueRequete(\Innov\UserBundle\Entity\HistoriqueRequete $historiqueRequete )
    {
        $this->historiqueRequete = $historiqueRequete;
        $historiqueRequete->addMesRequete($this);
        return $this;
    }

    /**
     * Get historiqueRequete
     *
     * @return \Innov\UserBundle\Entity\HistoriqueRequete 
     */
    public function getHistoriqueRequete()
    {
        return $this->historiqueRequete;
    }

    /**
     * Set groupSearch
     *
     * @param boolean $groupSearch
     * @return Requete
     */
    public function setGroupSearch($groupSearch = null)
    {
        $this->groupSearch = $groupSearch;

        return $this;
    }

    /**
     * Get groupSearch
     *
     * @return boolean 
     */
    public function getGroupSearch()
    {
        return $this->groupSearch;
    }
    
     public function __construct()
     {
         $this->groupSearch = false;
     }
}
