<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserLoginType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('pseudo', TextType::class)
                ->add('password', PasswordType::class)
                ->add('login', SubmitType::class, array(
                    'attr' => array('value' => 'ok')
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

}
