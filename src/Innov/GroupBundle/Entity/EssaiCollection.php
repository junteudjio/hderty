<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EssaiCollection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\EssaiCollectionRepository")
 */
class EssaiCollection
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
     /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Cliche", mappedBy="essaiCollections" )
    */
    private $cliches;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreFoisFavoris", type="integer", nullable=true)
     */
    private $nbreFoisFavoris;
    
    
     
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Tag", mappedBy="essaiCollections" )
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
     * @ORM\Column(name="nbreJaime", type="integer", nullable=true)
     */
    private $nbreJaime;
    
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\User" , inversedBy="mesEssaiCollections")
	* @ORM\JoinColumn(nullable=true)
    */
    private $auteurEssaiCollection;
    
     /**
	* @ORM\ManyToOne(targetEntity="Innov\GroupBundle\Entity\ExamCollection" , inversedBy="essaisCollections")
	* @ORM\JoinColumn(nullable=true)
    */
    private $examCollection;
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\CommentaireEssaiCollection", mappedBy="essaiCollection",cascade={"persist","remove"})
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
     * Set description
     *
     * @param string $description
     * @return EssaiCollection
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return EssaiCollection
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
   

    
    /**
     * Add essais
     *
     * @param \Innov\GroupBundle\Entity\Essai $essais
     * @return EssaiCollection
     */
    public function addEssai(\Innov\GroupBundle\Entity\Essai $essais)
    {
        $this->essais[] = $essais;
        
        return $this;
    }

    /**
     * Remove essais
     *
     * @param \Innov\GroupBundle\Entity\Essai $essais
     */
    public function removeEssai(\Innov\GroupBundle\Entity\Essai $essais)
    {
        $this->essais->removeElement($essais);
    }

    /**
     * Get essais
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEssais()
    {
        return $this->essais;
    }

    /**
     * Add cliches
     *
     * @param \Innov\UserBundle\Entity\Cliche $cliches
     * @return EssaiCollection
     */
    public function addClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {
        $this->cliches[] = $cliches;
        $cliches->addEssaiCollection($this);
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
                $this->dateCreation = new \DateTime();
                $this->visibilite = 0;
                $this->nbreJaime = 0;
                $this->nbreVue = 0;
                $this->nbreFoisFavoris =0;

    }


    
    /**
     * Set visibilite
     *
     * @param integer $visibilite
     * @return EssaiCollection
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
     * @return EssaiCollection
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
     * @return EssaiCollection
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
     * Set titre
     *
     * @param string $titre
     * @return EssaiCollection
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
     * Set auteurEssaiCollection
     *
     * @param \Innov\UserBundle\Entity\User $auteurEssaiCollection
     * @return EssaiCollection
     */
    public function setAuteurEssaiCollection(\Innov\UserBundle\Entity\User $auteurEssaiCollection = null)
    {
        $this->auteurEssaiCollection = $auteurEssaiCollection;

        return $this;
    }

    /**
     * Get auteurEssaiCollection
     *
     * @return \Innov\UserBundle\Entity\User 
     */
    public function getAuteurEssaiCollection()
    {
        return $this->auteurEssaiCollection;
    }

  
    /**
     * Set examCollection
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollection
     * @return EssaiCollection
     */
    public function setExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollection = null)
    {
        $this->examCollection = $examCollection;

        return $this;
    }

    /**
     * Get examCollection
     *
     * @return \Innov\GroupBundle\Entity\ExamCollection 
     */
    public function getExamCollection()
    {
        return $this->examCollection;
    }

    /**
     * Add commentaires
     *
     * @param \Innov\GroupBundle\Entity\CommentaireEssaiCollection $commentaires
     * @return EssaiCollection
     */
    public function addCommentaire(\Innov\GroupBundle\Entity\CommentaireEssaiCollection $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setEssaiCollection($this);
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Innov\GroupBundle\Entity\CommentaireEssaiCollection $commentaires
     */
    public function removeCommentaire(\Innov\GroupBundle\Entity\CommentaireEssaiCollection $commentaires)
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

    /**
     * Add tags
     *
     * @param \Innov\UserBundle\Entity\Tag $tags
     * @return EssaiCollection
     */
    public function addTag(\Innov\UserBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
        $tags->addEssaiCollection($this);
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
     * Set nbreFoisFavoris
     *
     * @param integer $nbreFoisFavoris
     * @return EssaiCollection
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
     * @return EssaiCollection
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
}
