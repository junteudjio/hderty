<?php

namespace Innov\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class cursusScolaireType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEcole')
            ->add('annee')
            ->add('diplome')
            ->add('mention')
            ->add('description')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Innov\UserBundle\Entity\cursusScolaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'innov_userbundle_cursusscolaire';
    }
}
