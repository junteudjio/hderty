<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\DocumentRepository")
 */
class Document
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuOcr", type="text", nullable=true)
     */
    private $contenuOcr;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Cliche", mappedBy="documents" )
    */
    private $cliches;
    
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $dateCreation;

    
    /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\SousDossierPerso" , inversedBy="document")
        * @ORM\JoinColumn(nullable=true) 
    */
    private $sousDossierPerso;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Tag", mappedBy="documents" )
    */
    private $tags;


    /**
     * @var integer
     *
     * @ORM\Column(name="nbreFoisFavoris", type="integer", nullable=true)
     */
    private $nbreFoisFavoris;
    
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
     * @ORM\Column(name="idSolr", type="string", length=255, nullable=true)
     */
    private $idSolr;
    
    /**
	* @ORM\ManyToOne(targetEntity="Innov\UserBundle\Entity\Ecole" , inversedBy="documents")
	* @ORM\JoinColumn(nullable=true)
    */
    private $ecole;

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
     * @return Document
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
     * Constructor
     */
    public function __construct()
    {
                     $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cliches = new \Doctrine\Common\Collections\ArrayCollection();
        $this->visibilite = 0; // une visibilité de 0 veut dire que le document est privé
        $this->dateCreation = new \DateTime();
        $this->nbreVue = 0;
        $this->nbreJaime = 0;
        $this->nbreFoisFavoris = 0;
    }

    
    
    /**
     * Add tags
     *
     * @param \Innov\UserBundle\Entity\Tag $tags
     * @return Document
     */
    public function addTag(\Innov\UserBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
        $tags->addDocument($this);
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
     * Set sousDossierPerso
     *
     * @param \Innov\UserBundle\Entity\SousDossierPerso $sousDossierPerso
     * @return Document
     */
    public function setSousDossierPerso(\Innov\UserBundle\Entity\SousDossierPerso $sousDossierPerso = null)
    {
        $this->sousDossierPerso = $sousDossierPerso;

        return $this;
    }

    /**
     * Get sousDossierPerso
     *
     * @return \Innov\UserBundle\Entity\SousDossierPerso 
     */
    public function getSousDossierPerso()
    {
        return $this->sousDossierPerso;
    }

    /**
     * Set visibilite
     *
     * @param integer $visibilite
     * @return Document
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
     * @return Document
     */
    public function setNbreVue($nbreVue = 0)
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
     * @return Document
     */
    public function setNbreJaime($nbreJaime = 0)
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
     * @return Document
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
     * @return Document
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
     * Set description
     *
     * @param string $description
     * @return Document
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
     * Set ecole
     *
     * @param \Innov\UserBundle\Entity\Ecole $ecole
     * @return Document
     */
    public function setEcole(\Innov\UserBundle\Entity\Ecole $ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return \Innov\UserBundle\Entity\Ecole 
     */
    public function getEcole()
    {
        return $this->ecole;
    }
    
    public function  toString() {
        return 'document';
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Document
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
     * Add cliches
     *
     * @param \Innov\UserBundle\Entity\Cliche $cliches
     * @return Document
     */
    public function addClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {
        $this->cliches[] = $cliches;
        $cliches->addDocument($this);
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
     * Set contenuOcr
     *
     * @param string $contenuOcr
     * @return Document
     */
    public function setContenuOcr($contenuOcr = null)
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

    /**
     * Set nbreFoisFavoris
     *
     * @param integer $nbreFoisFavoris
     * @return Document
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
    
    public function  getTypeEntite()
    {
        return 'document_';
    }
}
