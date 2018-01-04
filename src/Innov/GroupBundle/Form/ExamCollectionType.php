<?php

namespace Innov\GroupBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamCollectionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('intitule')
            ->add('description')
            ->add('exams','collection',array(
                    'type'=>new \Innov\GroupBundle\Form\ExamType(),
                    "label" => "Fichiers",
                    'allow_add' => true,
                    'allow_delete' => true,
                    "required" => true,
                    "attr" => array(
                        "id" => "fileUpload",
                        "name" => "files[]",
                        "accept" => "image/*",
                        "multiple" => "",
                    )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Innov\GroupBundle\Entity\ExamCollection'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'innov_groupbundle_examcollection';
    }
}
