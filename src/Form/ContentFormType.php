<?php

namespace App\Form;

use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\Hizmetler;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContentFormType extends AbstractType
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
            ->add('isim', TextType::class)
            ->add('slug', TextType::class)
            ->add('icerik', TextType::class)
            ->add('keyword', TextType::class)
            ->add('description', TextType::class)
            ->add('created_at', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                    'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
                ]
            ])
            ->add('bolge', ChoiceType::class, [
                'mapped'  => false,
                'choices' => $this->buildChoices()
            ])
            ->add('hizmet', CollectionType::class, [
                'entry_type' => Hizmetler::class,
                'entry_options' => ['label' => false],
            ])
        ;
    }

    protected function buildChoices() {
        $choices          = [];
        $table2Repository = $this->em->getRepository(Bolgeler::class);
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
