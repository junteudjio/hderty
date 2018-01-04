<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Cliche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\ClicheRepository")
 */
class Cliche
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
    * @ORM\ManyToMany(targetEntity="Innov\UserBundle\Entity\Document", inversedBy="cliches" )
    */
    private $documents;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\UserBundle\Entity\CommentCliche", mappedBy="cliche",cascade={"persist","remove"})
    */
    private $commentaires;

        
    /**
     * @var integer
     *
     * @ORM\Column(name="nbreJaime", type="integer")
     */
    private $nbreJaime;
 
    /**
     * @var integer
     *
     * @ORM\Column(name="nbreVue", type="integer")
     */
    private $nbreVue;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    public $url;
    
    /**
    * @ORM\ManyToMany(targetEntity="Innov\GroupBundle\Entity\ExamCollection", inversedBy="cliches" )
    */
    private $examCollections;

    /**
    * @ORM\ManyToMany(targetEntity="Innov\GroupBundle\Entity\EssaiCollection", inversedBy="cliches" )
    */
    private $essaiCollections;
   

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    public $alt;
    
    public $file ;

    private $tempFilename;

    
      
    public function setFile(UploadedFile $file)
{
$this->file = $file;


// On vérifie si on avait déjà un fichier pour cette entité
if (null !== $this->url) {
// On sauvegarde l'extension du fichier pour le supprimer plus tard
$this->tempFilename = $this->url;
// On réinitialise les valeurs des attributs url et alt
$this->url = null;
$this->alt = null;
}
}

public function getFile()
{
	return $this->file ;
}


/**
* @ORM\PrePersist()
* @ORM\PreUpdate()
*/
public function preUpload()
{
// Si jamais il n'y a pas de fichier (champ facultatif)
if (null === $this->file) {
return;
}
// Le nom du fichier est son id, on doit juste stocker également son extension
// Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »

$this->url = $this->file->guessExtension();

// Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute

$this->alt = $this->file->getClientOriginalName();
}
/**
* @ORM\PostPersist()
* @ORM\PostUpdate()
*/
public function upload()
{
// Si jamais il n'y a pas de fichier (champ facultatif)
if (null === $this->file) {
return;
}
// Si on avait un ancien fichier, on le supprime
if (null !== $this->tempFilename) {
$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;

if (file_exists($oldFile)) {
unlink($oldFile);
}
}
$this->file->move(
$this->getUploadRootDir(), // Le répertoire de destination
$this->id.'.'.$this->url // Le nom du fichier à créer, ici « id.extension »
);
}
public function getUploadDir()
{
// On retourne le chemin relatif vers le fichier pour un navigateur
return 'uploads/cliches';
}
public function getUploadRootDir()
{
// On retourne le chemin relatif vers le fichier pour notre code PHP
return __DIR__.'/../../../../web/'.$this->getUploadDir();
}

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setNbreJaime(0);
        $this->setNbreVue(0);
        $this->dateCreation = new \DateTime();
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Cliche
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
     * Set nbreJaime
     *
     * @param integer $nbreJaime
     * @return Cliche
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
     * Set nbreVue
     *
     * @param integer $nbreVue
     * @return Cliche
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
     * Set url
     *
     * @param string $url
     * @return Cliche
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Cliche
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    

    /**
     * Add commentaires
     *
     * @param \Innov\UserBundle\Entity\CommentCliche $commentaires
     * @return Cliche
     */
    public function addCommentaire(\Innov\UserBundle\Entity\CommentCliche $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Innov\UserBundle\Entity\CommentCliche $commentaires
     */
    public function removeCommentaire(\Innov\UserBundle\Entity\CommentCliche $commentaires)
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
     * Add examCollections
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollections
     * @return Cliche
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
     * @return Cliche
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
     * @return Cliche
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
}
