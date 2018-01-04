<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CorrectionCollection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\CorrectionCollectionRepository")
 */
class CorrectionCollection
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
     * @ORM\Column(name="intitule", type="text")
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    
     /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\Correction", mappedBy="correctionCollection",cascade={"persist","remove"})
    */
    private $corrections;



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
     * Set intitule
     *
     * @param string $intitule
     * @return CorrectionCollection
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CorrectionCollection
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return CorrectionCollection
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
                $this->dateCreation = new \DateTime();
        $this->corrections = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add corrections
     *
     * @param \Innov\GroupBundle\Entity\Correction $corrections
     * @return CorrectionCollection
     */
    public function addCorrection(\Innov\GroupBundle\Entity\Correction $corrections)
    {
        $this->corrections[] = $corrections;

        return $this;
    }

    /**
     * Remove corrections
     *
     * @param \Innov\GroupBundle\Entity\Correction $corrections
     */
    public function removeCorrection(\Innov\GroupBundle\Entity\Correction $corrections)
    {
        $this->corrections->removeElement($corrections);
    }

    /**
     * Get corrections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCorrections()
    {
        return $this->corrections;
    }
}
