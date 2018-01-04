<?php

namespace Innov\GroupBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupeType extends AbstractType
{
    
    protected  $user;
    
      public function __construct($user = null)
    {
        $this->user = $user;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $this->user;
        $builder
            ->add('nom')
            ->add('membres', 'entity', array(
                                            'class'    => 'InnovUserBundle:User',                                            
                                            'multiple' => true,
                                            'required' => false,
                                                'query_builder' => function(\Doctrine\ORM\EntityRepository $ur) use($user) {
                                                                return $ur->createQueryBuilder('u')
                                                                          ->where('u.id != ?1')
                                                                          ->orderBy('u.username', 'ASC')
                                                                          ->setParameter(1, $user->getId());
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
        return 'innov_groupbundle_groupe';
    }
}
