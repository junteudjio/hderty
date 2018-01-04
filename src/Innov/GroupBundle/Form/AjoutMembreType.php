<?php

namespace Innov\GroupBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AjoutMembreType extends AbstractType
{
    
    protected  $membres;
    
      public function __construct($membres = null)
    {
        $this->membres = $membres;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $membres = $this->membres;
        $builder
            ->add('membres', 'entity', array(
                                            'class'    => 'InnovUserBundle:User',                                            
                                            'multiple' => true,
                                            'required' => false,
                                                'query_builder' => function(\Doctrine\ORM\EntityRepository $ur) use($membres) {
                                                                return $ur->createQueryBuilder('u')
                                                                          ->where('u.id  not in (?1)')
                                                                          ->orderBy('u.username', 'ASC')
                                                                          ->setParameter(1, $membres);
                                                                },
                                            )
                 );
       
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Innov\GroupBundle\Entity\Groupe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'innov_groupbundle_ajout';
    }
}
