<?php

namespace App\Form;

use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\Hizmetler;
use Doctrine\ORM\EntityManagerInterface;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentChangeFormType extends AbstractType
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isim', TextType::class, ['attr'=>['class'=>'form-control']])
            //->add('slug', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('icerik', CKEditorType::class, [
                'config' => [
                    'uiColor' => '#e2e2e2',
                    'toolbar' => 'full',
                    'required' => true
                ]
            ])
            ->add('keyword', TextType::class, ['attr'=>['class'=>'form-control is-valid']])
            ->add('description', TextType::class, ['attr'=>['class'=>'form-control is-valid']])
//            ->add('created_at', DateTimeType::class, [
//                'placeholder' => [
//                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
//                    'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
//                ]
//            ])
            ->add('bolge', ChoiceType::class, [
                'attr'=>['class'=>'form-select'],
                'mapped'  => false,
                'choices' => $this->buildChoicesBolge()
            ])
            ->add('hizmet', ChoiceType::class, [
                'attr'=>['class'=>'form-select'],
                'mapped'  => false,
                'choices' => $this->buildChoicesHizmet()
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'Oluştur',
                'row_attr' => ['class' => 'd-grid gap-2 mb-5 mt-3'],
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    protected function buildChoicesBolge() {
        $choices          = [];
        $table2Repository = $this->em->getRepository(Bolgeler::class);
        $table2Objects    = $table2Repository->findAll();

        foreach ($table2Objects as $table2Obj) {
            $choices[$table2Obj->getIsim()] = $table2Obj->getId();
        }

        return $choices;
    }

    protected function buildChoicesHizmet() {
        $choices          = [];
        $table2Repository = $this->em->getRepository(Hizmetler::class);
        $table2Objects    = $table2Repository->findAll();

        foreach ($table2Objects as $table2Obj) {
            $choices[$table2Obj->getIsim()] = $table2Obj->getId();
        }

        return $choices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Content::class,
        ]);
    }
}
