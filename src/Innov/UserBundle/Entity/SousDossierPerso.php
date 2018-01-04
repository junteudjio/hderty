<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousDossierPerso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\SousDossierPersoRepository")
 */
class SousDossierPerso
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    
      /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\DossierPerso" , inversedBy="sousDossiersPerso")
	* @ORM\JoinColumn(nullable=false)
    */
    private $dossierPerso;
    
    
/**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\Document", mappedBy="sousDossierPerso",cascade={"persist","remove"})
    */
    private $document;

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
     * Set nom
     *
     * @param string $nom
     * @return SousDossierPerso
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dossierPerso
     *
     * @param \Innov\UserBundle\Entity\DossierPerso $dossierPerso
     * @return SousDossierPerso
     */
    public function setDossierPerso(\Innov\UserBundle\Entity\DossierPerso $dossierPerso)
    {
        $this->dossierPerso = $dossierPerso;

        return $this;
    }

    /**
     * Get dossierPerso
     *
     * @return \Innov\UserBundle\Entity\DossierPerso 
     */
    public function getDossierPerso()
    {
        return $this->dossierPerso;
    }

    

    
    /**
     * Constructor
     */
    public function __construct()
    {
                        $this->document = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add examCollection
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollection
     * @return SousDossierPerso
     */
    public function addExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollection)
    {
        $this->examCollection[] = $examCollection;
        $examCollection->setSousDossierPerso($this);
        return $this;
    }

    /**
     * Remove examCollection
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollection
     */
    public function removeExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollection)
    {
        $this->examCollection->removeElement($examCollection);
    }

    /**
     * Get examCollection
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExamCollection()
    {
        return $this->examCollection;
    }

    

    /**
     * Add document
     *
     * @param \Innov\UserBundle\Entity\Document $document
     * @return SousDossierPerso
     */
    public function addDocument(\Innov\UserBundle\Entity\Document $document)
    {
        $this->document[] = $document;
        $document->setSousDossierPerso($this);
        return $this;
    }

    /**
     * Remove document
     *
     * @param \Innov\UserBundle\Entity\Document $document
     */
    public function removeDocument(\Innov\UserBundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument()
    {
        return $this->document;
    }
}
