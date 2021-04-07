<?php

namespace App\Form;

use App\Entity\Banner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BannerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photo', FileType::class, [
                'label' => 'Banner',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('title', TextType::class, [
                'label' => 'Başlık',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('description', TextType::class, [
                'label' => 'Açıklama',
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('path', TextType::class, [
                'label' => 'Buton Yol (örnek ekleme: https://www.tuksal.com), Yoksa \'yok\' yazınız',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('desk', TextType::class, [
                'label' => 'Gösterim Sırası (Örnek kullanım: 1) ',
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'row_attr' => ['class' => 'mb-3']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Oluştur',
                'row_attr' => ['class' => 'd-grid gap-2'],
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Banner::class,
        ]);
    }
}
