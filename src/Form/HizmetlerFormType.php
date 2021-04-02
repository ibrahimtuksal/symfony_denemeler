<?php

namespace App\Form;

use App\Entity\Hizmetler;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HizmetlerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isim', TextType::class,['attr'=>['class'=>'form-control','autofocus'=>true]])
            //->add('slug')
            ->add('keyword', TextType::class,
                ['label'=>'Anahtar Kelimeler (SEO)','attr'=>['class'=>'form-control']]
            )
            ->add('description', TextType::class,
                ['label'=>'Sayfa Açıklama (SEO)','attr'=>['class'=>'form-control']]
            )
            ->add('Submit', SubmitType::class,
                ['label'=>'Ekle','row_attr'=>['class'=>'d-grid gap-2 my-3'],'attr'=>['class'=>'btn btn-success']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hizmetler::class,
        ]);
    }
}
