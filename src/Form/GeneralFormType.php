<?php

namespace App\Form;

use App\Entity\General;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Site İsim',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('keyword', TextType::class, [
                'label' => 'Site Anahtar Kelime',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('description', TextType::class, [
                'label' => 'Site Açıklama',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('slogan', TextType::class, [
                'label' => 'Site Slogan',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('whatsapp_no', TextType::class, [
                'label' => 'Whatsapp Numarası (örnek: 5413779956)',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('light_color', ColorType::class, [
                'label' => 'Açık Renk',
                'attr' => ['class' => 'form-control form-control-color'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('dark_color', ColorType::class, [
                'label' => 'Kapalı Renk',
                'attr' => ['class' => 'form-control form-control-color'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Güncelle',
                'attr' => ['class' => 'btn btn-success'],
                'row_attr' => ['class' => 'd-grid gap-2 my-3']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => General::class,
        ]);
    }
}
