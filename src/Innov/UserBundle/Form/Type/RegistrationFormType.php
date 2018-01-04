<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Innov\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;


class RegistrationFormType extends BaseType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('nom')
                ->add('prenom')
//                ->add('sexe', 'choice', array(
//                                             'choices'   => array(
//                                                             'F'   => 'Femme',
//                                                             'H' => 'Homme', 
//                                                             
//                                                                ),
//                                            'multiple'  => false,
//                                            'expanded' => false ,
//                ))
              ->remove('username')
              ;
    }
    public function getName()
    {
        return 'innov_user_registration';
    }
}
