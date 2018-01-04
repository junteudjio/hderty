<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueRequete
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\HistoriqueRequeteRepository")
 */
class HistoriqueRequete
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
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\Requete", mappedBy="historiqueRequete",cascade={"persist","remove"})
    */
    private $mesRequetes;

    



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
     * Constructor
     */
    public function __construct()
    {
        $this->mesRequetes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mesRequetes
     *
     * @param \Innov\UserBundle\Entity\Requete $mesRequetes
     * @return HistoriqueRequete
     */
    public function addMesRequete(\Innov\UserBundle\Entity\Requete $mesRequetes)
    {
        $this->mesRequetes[] = $mesRequetes;

        return $this;
    }

    /**
     * Remove mesRequetes
     *
     * @param \Innov\UserBundle\Entity\Requete $mesRequetes
     */
    public function removeMesRequete(\Innov\UserBundle\Entity\Requete $mesRequetes)
    {
        $this->mesRequetes->removeElement($mesRequetes);
    }

    /**
     * Get mesRequetes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesRequetes()
    {
        return $this->mesRequetes;
    }
}
