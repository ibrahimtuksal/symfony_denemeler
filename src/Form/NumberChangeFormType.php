<?php

namespace App\Form;

use App\Entity\Number;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NumberChangeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('buton_name', TextType::class, [
                'label' => 'Buton İsmi',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('number', TextType::class, [
                'label' => 'Numara (örnek: 5413779956 "sıfırsız")',
                'attr' => ['class' => 'form-control'],
                'row_attr' => ['class' => 'my-3']
            ])
            ->add('submit', SubmitType::class, [
                'row_attr' => ['class' => 'd-grid gap-2 my-3'],
                'attr' => ['class' => 'btn btn-success'],
                'label' => 'Oluştur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Number::class,
        ]);
    }
}
