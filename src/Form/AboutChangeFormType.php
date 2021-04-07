<?php

namespace App\Form;

use App\Entity\About;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AboutChangeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Başlık',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3'],
                'required' => true
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Açıklama',
                'attr'  => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Güncelle',
                'row_attr' => ['class' => 'd-grid gap-2 my-3'],
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => About::class,
        ]);
    }
}
