<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('role')
            ->add('password')
            ->add('sexe')
            ->add('adresse')
            ->add('codepostale')
            ->add('ville')
            ->add('telmobile')
            ->add('telfixe')
            ->add('adresseentreprise')
            ->add('etatcompte')
            ->add('cle')
            ->add('typecompte')
            ->add('deleted')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
