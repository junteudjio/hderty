<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierPerso
 *
 * @ORM\Table("DossierPerso")
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\DossierPersoRepository")
 */
class DossierPerso
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
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\SousDossierPerso", mappedBy="dossierPerso",cascade={"persist","remove"})
    */
    private $sousDossiersPerso;



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
        $this->sousDossiersPerso = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sousDossiersPerso
     *
     * @param \Innov\UserBundle\Entity\SousDossierPerso $sousDossiersPerso
     * @return DossierPerso
     */
    public function addSousDossiersPerso(\Innov\UserBundle\Entity\SousDossierPerso $sousDossiersPerso)
    {
        $this->sousDossiersPerso[] = $sousDossiersPerso;
        $sousDossiersPerso->setDossierPerso($this);
        return $this;
    }

    /**
     * Remove sousDossiersPerso
     *
     * @param \Innov\UserBundle\Entity\SousDossierPerso $sousDossiersPerso
     */
    public function removeSousDossiersPerso(\Innov\UserBundle\Entity\SousDossierPerso $sousDossiersPerso)
    {
        $this->sousDossiersPerso->removeElement($sousDossiersPerso);
    }

    /**
     * Get sousDossiersPerso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousDossiersPerso()
    {
        return $this->sousDossiersPerso;
    }
}
