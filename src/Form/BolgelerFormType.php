<?php

namespace App\Form;

use App\Entity\Bolgeler;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BolgelerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isim', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('submit',SubmitType::class, [
                'label'=>'Ekle','row_attr'=>['class'=>'d-grid gap-2 my-3'],'attr'=>['class'=>'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bolgeler::class,
        ]);
    }
}
