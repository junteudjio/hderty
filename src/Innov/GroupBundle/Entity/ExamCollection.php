<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExamCollection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\ExamCollectionRepository")
 */
class ExamCollection
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text",nullable=true)
     */
    private $description;
    
 
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Cliche", mappedBy="examCollections" )
    */
    private $cliches;

    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Tag", mappedBy="examCollections" )
    */
    private $tags;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="visibilite", type="integer", nullable=true)
     */
    private $visibilite;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbreVue", type="integer", nullable=true)
     */
    private $nbreVue;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreFoisFavoris", type="integer", nullable=true)
     */
    private $nbreFoisFavoris;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="nbreJaime", type="integer", nullable=true)
     */
    private $nbreJaime;
    
    /**
     * @var string
     *
     * @ORM\Column(name="idSolr", type="string", length=255, nullable=true)
     */
    private $idSolr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" , inversedBy="mesExamCollections")
	* @ORM\JoinColumn(nullable=true)
    */
    private $auteurExamCollection;
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\EssaiCollection", mappedBy="examCollection",cascade={"persist","remove"})
    */
    private $essaisCollections; 
    
    
      /**
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\Groupe" , inversedBy="examCollections")
	* @ORM\JoinColumn(nullable=true)
    */
    private $groupe;
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\CommentaireExamCollection", mappedBy="examCollection",cascade={"persist","remove"})
    */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuOcr", type="text", nullable=true)
     */
    private $contenuOcr;
    
    
    

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
     * @return ExamCollection
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return ExamCollection
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
     * Set description
     *
     * @param string $description
     * @return ExamCollection
     */
    public function setDescription($description = null)
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
     * Add cliches
     *
     * @param \Innov\UserBundle\Entity\Cliche $cliches
     * @return ExamCollection
     */
    public function addClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {
        $this->cliches[] = $cliches;
        $cliches->addExamCollection($this);
        return $this;
    }

    /**
     * Remove cliches
     *
     * @param \Innov\UserBundle\Entity\Cliche $cliches
     */
    public function removeClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {
        $this->cliches->removeElement($cliches);
    }

    /**
     * Get cliches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCliches()
    {
        return $this->cliches;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cliches = new \Doctrine\Common\Collections\ArrayCollection();
                $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
                $this->essaisCollections = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation = new \DateTime();
        
        $this->visibilite = 0;
        $this->nbreJaime =0;
        $this->nbreVue = 0;
        $this->nbreFoisFavoris = 0;
    }


    

    /**
     * Set visibilite
     *
     * @param integer $visibilite
     * @return ExamCollection
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return integer 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }

    /**
     * Set nbreVue
     *
     * @param integer $nbreVue
     * @return ExamCollection
     */
    public function setNbreVue($nbreVue)
    {
        $this->nbreVue = $nbreVue;

        return $this;
    }

    /**
     * Get nbreVue
     *
     * @return integer 
     */
    public function getNbreVue()
    {
        return $this->nbreVue;
    }

    /**
     * Set nbreJaime
     *
     * @param integer $nbreJaime
     * @return ExamCollection
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
     * Set idSolr
     *
     * @param string $idSolr
     * @return ExamCollection
     */
    public function setIdSolr($idSolr = null)
    {
        $this->idSolr = $idSolr;

        return $this;
    }

    /**
     * Get idSolr
     *
     * @return string 
     */
    public function getIdSolr()
    {
        return $this->idSolr;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return ExamCollection
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Add tags
     *
     * @param \Innov\UserBundle\Entity\Tag $tags
     * @return ExamCollection
     */
    public function addTag(\Innov\UserBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
        $tags->addExamCollection($this);
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Innov\UserBundle\Entity\Tag $tags
     */
    public function removeTag(\Innov\UserBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set auteurExamCollection
     *
     * @param \Innov\UserBundle\Entity\User $auteurExamCollection
     * @return ExamCollection
     */
    public function setAuteurExamCollection(\Innov\UserBundle\Entity\User $auteurExamCollection = null)
    {
        $this->auteurExamCollection = $auteurExamCollection;

        return $this;
    }

    /**
     * Get auteurExamCollection
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getAuteurExamCollection()
    {
        return $this->auteurExamCollection;
    }

    
    /**
     * Add essaisCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $essaisCollections
     * @return ExamCollection
     */
    public function addEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaisCollections)
    {
        $this->essaisCollections[] = $essaisCollections;
        $essaisCollections->setExamCollection($this);
        return $this;
    }

    /**
     * Remove essaisCollections
     *
     * @param \Innov\GroupBundle\Entity\EssaiCollection $essaisCollections
     */
    public function removeEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaisCollections)
    {
        $this->essaisCollections->removeElement($essaisCollections);
    }

    /**
     * Get essaisCollections
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEssaisCollections()
    {
        return $this->essaisCollections;
    }

    /**
     * Set groupe
     *
     * @param \Innov\GroupBundle\Entity\Groupe $groupe
     * @return ExamCollection
     */
    public function setGroupe(\Innov\GroupBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;
        $groupe->addExamCollection($this);
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
     * Add commentaires
     *
     * @param \Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires
     * @return ExamCollection
     */
    public function addCommentaire(\Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setExamCollection($this);
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires
     */
    public function removeCommentaire(\Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    
     public function  toString() {
        return 'examCo';
    }

    /**
     * Set nbreFoisFavoris
     *
     * @param integer $nbreFoisFavoris
     * @return ExamCollection
     */
    public function setNbreFoisFavoris($nbreFoisFavoris)
    {
        $this->nbreFoisFavoris = $nbreFoisFavoris;

        return $this;
    }

    /**
     * Get nbreFoisFavoris
     *
     * @return integer 
     */
    public function getNbreFoisFavoris()
    {
        return $this->nbreFoisFavoris;
    }

    /**
     * Set contenuOcr
     *
     * @param string $contenuOcr
     * @return ExamCollection
     */
    public function setContenuOcr($contenuOcr)
    {
        $this->contenuOcr = $contenuOcr;

        return $this;
    }

    /**
     * Get contenuOcr
     *
     * @return string 
     */
    public function getContenuOcr()
    {
        return $this->contenuOcr;
    }
    
    public function getTypeEntite()
    {
        return "examCo_";
    }
}
