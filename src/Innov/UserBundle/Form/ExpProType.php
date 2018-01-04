<?php

namespace Innov\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExpProType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEntreprise')
            ->add('intitule')
            ->add('lieu')
            ->add('description')
            ->add('dateDebut')
            ->add('dateFin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Innov\UserBundle\Entity\ExpPro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'innov_userbundle_exppro';
    }
}
