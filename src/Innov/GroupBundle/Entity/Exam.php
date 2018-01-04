<?php

namespace Innov\GroupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Exam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\GroupBundle\Entity\ExamRepository")
 */
class Exam
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    
    
    /**
    * @ORM\OneToMany(targetEntity="Innov\GroupBundle\Entity\CommentExam", mappedBy="exam",cascade={"persist","remove"})
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
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    public $alt;
    
    public $file ;

    private $tempFilename;




   public function setId( $id)
   {
       $this->id = $id;
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
return 'uploads/exam';
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
    }

    /**
     * Set nbreJaime
     *
     * @param integer $nbreJaime
     * @return Exam
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
     * @return Exam
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
     * @return Exam
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
     * @return Exam
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
     * Set examCollection
     *
     * @param \Innov\GroupBundle\Entity\ExamCollection $examCollection
     * @return Exam
     */
    public function setExamCollection(\Innov\GroupBundle\Entity\ExamCollection $examCollection)
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
     * @param \Innov\GroupBundle\Entity\CommentExam $commentaires
     * @return Exam
     */
    public function addCommentaire(\Innov\GroupBundle\Entity\CommentExam $commentaires)
    {
        $this->commentaires[] = $commentaires;
        $commentaires->setExam($this);
        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \Innov\GroupBundle\Entity\CommentExam $commentaires
     */
    public function removeCommentaire(\Innov\GroupBundle\Entity\CommentExam $commentaires)
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Exam
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
}
