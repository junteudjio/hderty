<?php

namespace Proxies\__CG__\Innov\GroupBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ExamCollection extends \Innov\GroupBundle\Entity\ExamCollection implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'intitule', 'dateCreation', 'description', 'cliches', 'tags', 'visibilite', 'nbreVue', 'nbreFoisFavoris', 'nbreJaime', 'idSolr', 'titre', 'auteurExamCollection', 'essaisCollections', 'groupe', 'commentaires', 'contenuOcr');
        }

        return array('__isInitialized__', 'id', 'intitule', 'dateCreation', 'description', 'cliches', 'tags', 'visibilite', 'nbreVue', 'nbreFoisFavoris', 'nbreJaime', 'idSolr', 'titre', 'auteurExamCollection', 'essaisCollections', 'groupe', 'commentaires', 'contenuOcr');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ExamCollection $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntitule($intitule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntitule', array($intitule));

        return parent::setIntitule($intitule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntitule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntitule', array());

        return parent::getIntitule();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function addClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClich', array($cliches));

        return parent::addClich($cliches);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClich(\Innov\UserBundle\Entity\Cliche $cliches)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClich', array($cliches));

        return parent::removeClich($cliches);
    }

    /**
     * {@inheritDoc}
     */
    public function getCliches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCliches', array());

        return parent::getCliches();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibilite($visibilite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibilite', array($visibilite));

        return parent::setVisibilite($visibilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibilite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibilite', array());

        return parent::getVisibilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreVue($nbreVue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreVue', array($nbreVue));

        return parent::setNbreVue($nbreVue);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreVue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreVue', array());

        return parent::getNbreVue();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreJaime($nbreJaime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreJaime', array($nbreJaime));

        return parent::setNbreJaime($nbreJaime);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreJaime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreJaime', array());

        return parent::getNbreJaime();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSolr($idSolr = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSolr', array($idSolr));

        return parent::setIdSolr($idSolr);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSolr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSolr', array());

        return parent::getIdSolr();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\Innov\UserBundle\Entity\Tag $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', array($tags));

        return parent::addTag($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\Innov\UserBundle\Entity\Tag $tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', array($tags));

        return parent::removeTag($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', array());

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteurExamCollection(\Innov\UserBundle\Entity\User $auteurExamCollection = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteurExamCollection', array($auteurExamCollection));

        return parent::setAuteurExamCollection($auteurExamCollection);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteurExamCollection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteurExamCollection', array());

        return parent::getAuteurExamCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaisCollections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEssaisCollection', array($essaisCollections));

        return parent::addEssaisCollection($essaisCollections);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEssaisCollection(\Innov\GroupBundle\Entity\EssaiCollection $essaisCollections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEssaisCollection', array($essaisCollections));

        return parent::removeEssaisCollection($essaisCollections);
    }

    /**
     * {@inheritDoc}
     */
    public function getEssaisCollections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEssaisCollections', array());

        return parent::getEssaisCollections();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupe(\Innov\GroupBundle\Entity\Groupe $groupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupe', array($groupe));

        return parent::setGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupe', array());

        return parent::getGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', array($commentaires));

        return parent::addCommentaire($commentaires);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\Innov\GroupBundle\Entity\CommentaireExamCollection $commentaires)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', array($commentaires));

        return parent::removeCommentaire($commentaires);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', array());

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toString', array());

        return parent::toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreFoisFavoris($nbreFoisFavoris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreFoisFavoris', array($nbreFoisFavoris));

        return parent::setNbreFoisFavoris($nbreFoisFavoris);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreFoisFavoris()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreFoisFavoris', array());

        return parent::getNbreFoisFavoris();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenuOcr($contenuOcr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenuOcr', array($contenuOcr));

        return parent::setContenuOcr($contenuOcr);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenuOcr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenuOcr', array());

        return parent::getContenuOcr();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeEntite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeEntite', array());

        return parent::getTypeEntite();
    }

}