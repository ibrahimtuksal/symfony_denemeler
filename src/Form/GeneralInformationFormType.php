<?php

namespace App\Form;

use App\Entity\GeneralInformation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralInformationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('icon', TextType::class, [
                'label' => 'İkon',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('title', TextType::class, [
                'label' => 'Başlık',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('description', TextType::class, [
                'label' => 'Açıklama',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('path', TextType::class, [
                'label' => 'Buton Yol',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('desk', TextType::class, [
                'label' => 'Gösterim Sırası',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Oluştur',
                'row_attr' => ['class' => 'd-grid gap-2 my-3'],
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GeneralInformation::class,
        ]);
    }
}
