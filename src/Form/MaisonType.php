<?php

namespace App\Form;

use App\Entity\Maisons;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class MaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('chambres', IntegerType::class)
            ->add('prix', IntegerType::class)
            ->add('note', IntegerType::class)
            ->add('superficie', IntegerType::class)
            ->add('img1', TextType::class)
            ->add('img2', TextType::class)
            ->add('img3', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Maisons::class,
        ]);
    }
}
