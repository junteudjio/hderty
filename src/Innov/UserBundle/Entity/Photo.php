<?php

namespace Innov\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Photo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Innov\UserBundle\Entity\PhotoRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Photo
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

   

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="uploadDir", type="string", length=255, nullable=true)
     */
    private $uploadDir;
    
     
    /**
     * @Assert\File(maxSize="60000000")
     */    	
    private $file ;
    
    
    
    /**
     * @Assert\File(maxSize="60000000")
     */
	
    private $tempFilename;
// On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre

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

protected function getUploadRootDir()
{
// On retourne le chemin relatif vers le fichier pour notre code PHP
return __DIR__.'/../../../../web/'.$this->getUploadDir();
}
    public function __construct()
    {
        $this->uploadDir = 'uploads/user/defaultPhotos';
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
     * Set alt
     *
     * @param string $alt
     * @return Rapport
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
     * Set url
     *
     * @param string $url
     * @return Rapport
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
    
       public function getUploadDir()
{

return $this->uploadDir;
}
   

    /**
     * Set uploadDir
     *
     * @param string $uploadDir
     * @return Photo
     */
    public function setUploadDir($uploadDir = 'uploads/user/photos')
    {
        $this->uploadDir = $uploadDir;

        return $this;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
