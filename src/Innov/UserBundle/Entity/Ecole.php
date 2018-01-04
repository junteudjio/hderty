<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecole
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\EcoleRepository")
 */
class Ecole
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
     * @ORM\Column(name="nomEcole", type="string", length=255)
     */
    private $nomEcole;
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\User", mappedBy="ecole")
    */
    private $eleves;
    
  
    
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nomEcole
     *
     * @param string $nomEcole
     * @return Ecole
     */
    public function setNomEcole($nomEcole)
    {
        $this->nomEcole = $nomEcole;

        return $this;
    }

    /**
     * Get nomEcole
     *
     * @return string 
     */
    public function getNomEcole()
    {
        return $this->nomEcole;
    }

    /**
     * Add eleves
     *
     * @param \Innov\UserBundle\Entity\User $eleves
     * @return Ecole
     */
    public function addEleve(\Innov\UserBundle\Entity\User $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Remove eleves
     *
     * @param \Innov\UserBundle\Entity\User $eleves
     */
    public function removeEleve(\Innov\UserBundle\Entity\User $eleves)
    {
        $this->eleves->removeElement($eleves);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * Add eleves
     *
     * @param \Innov\UserBundle\Entity\User $eleves
     * @return Ecole
     */
    public function addElefe(\Innov\UserBundle\Entity\User $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Add documents
     *
     * @param \Innov\UserBundle\Entity\Document $documents
     * @return Ecole
     */
    public function addDocument(\Innov\UserBundle\Entity\Document $documents)
    {
        $this->documents[] = $documents;

        return $this;
    }

    /**
     * Remove documents
     *
     * @param \Innov\UserBundle\Entity\Document $documents
     */
    public function removeDocument(\Innov\UserBundle\Entity\Document $documents)
    {
        $this->documents->removeElement($documents);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Remove eleves
     *
     * @param \Innov\UserBundle\Entity\User $eleves
     */
    public function removeElefe(\Innov\UserBundle\Entity\User $eleves)
    {
        $this->eleves->removeElement($eleves);
    }
}
