<?php

namespace App\Form;

use App\Entity\General;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('light_color')
            ->add('dark_color')
            ->add('keyword')
            ->add('description')
            ->add('slogan')
            ->add('whatsapp_no')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => General::class,
        ]);
    }
}
