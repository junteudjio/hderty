<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\GroupBundle\Entity\ExamCollection", inversedBy="tags" )
    */
    private $examCollections;

    /**
    * @ORM\ManyToMany(targetEntity="Innov\GroupBundle\Entity\EssaiCollection", inversedBy="tags" )
    */
    private $essaiCollections;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Document", inversedBy="tags" )
    */
    private $documents;


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
        $this->examCollections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->essaiCollections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add examCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollections
     * @return Tag
     */
    public function addExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollections)
    {
        $this->examCollections[] = $examCollections;

        return $this;
    }

    /**
     * Remove examCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollections
     */
    public function removeExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollections)
    {
        $this->examCollections->removeElement($examCollections);
    }

    /**
     * Get examCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExamCollections()
    {
        return $this->examCollections;
    }

    /**
     * Add essaiCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $essaiCollections
     * @return Tag
     */
    public function addEssaiCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaiCollections)
    {
        $this->essaiCollections[] = $essaiCollections;

        return $this;
    }

    /**
     * Remove essaiCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $essaiCollections
     */
    public function removeEssaiCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaiCollections)
    {
        $this->essaiCollections->removeElement($essaiCollections);
    }

    /**
     * Get essaiCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEssaiCollections()
    {
        return $this->essaiCollections;
    }

    /**
     * Add documents
     *
     * @param \Innov\UserBundle\Entity\Document $documents
     * @return Tag
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
     * Set text
     *
     * @param string $text
     * @return Tag
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}
