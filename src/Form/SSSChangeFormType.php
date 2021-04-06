<?php

namespace App\Form;

use App\Entity\SSS;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SSSChangeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr'=>['class'=>'form-control'],
                'row_attr'=>['class'=>'my-3'],
                'label' => 'Başlık'
            ])
            ->add('description', CKEditorType::class, [
                'config' => [
                    'uiColor' => '#e2e2e2',
                    'toolbar' => 'full',
                    'required' => true
                ],
                'label' => 'İçeriği'
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
            'data_class' => SSS::class,
        ]);
    }
}
